<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ListingController extends Controller
{
    //list all jobs
    public function index(){
        return view('listings.index', [
            'heading'=>'Listing',
            //'listings'=>Listing::all()
            'listings'=>Listing::latest()->filter(request(['tag','search']))->paginate(5)
            
        ]);
    }

    //listing single job
    public function show(Listing $listing){
        return view('listings.show',[
            'listing'=> $listing
        ]);
    }

    //show form listing for create
    public function create(){
        return view('listings.create');
    }

    //store create listing
    public function store(Request $request){
        //dd($request->all());
       
        $formField= $request->validate(
            [
                'title'=>'required',
                'company'=>['required',Rule::unique('listings','company')],
                'location'=>'required',
                'email'=>['required','email'],
                'tags'=>'required',
                'website'=>'required',
                'description'=>'required'
            ]
            );

            if($request->hasFile('logo')){
                $formField['logo']=$request->file('logo')->store('logos','public');
            }

            Listing::create($formField);
            return redirect('/')->with('message','Listing Created Sucessfully');
            //return redirect()
        
    }

    //Show Edit Listing
    public function edit(Listing $listing){
        //dd($listing);
        return view('Listings.edit',['listing'=>$listing]);
    }

    //Update Form Listing
    public function update(Request $request,Listing $listing){
        $formField= $request->validate(
            [
                'title'=>'required',
                'company'=>['required'],
                'location'=>'required',
                'email'=>['required','email'],
                'tags'=>'required',
                'website'=>'required',
                'description'=>'required'
            ]
            );

            if($request->hasFile('logo')){
                $formField['logo']=$request->file('logo')->store('logos','public');
            }

            $listing->update($formField);
            return back()->with('message','Listing Updated Sucessfully');
    }
}
