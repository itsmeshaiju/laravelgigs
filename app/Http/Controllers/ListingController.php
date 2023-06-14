<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    //list all jobs
    public function index(){
        return view('listings.index', [
            'heading'=>'Listing',
            'listings'=>Listing::all()
        ]);
    }

    //listing single job
    public function show(Listing $listing){
        return view('listings.show',[
            'listing'=> $listing
        ]);
    }
}
