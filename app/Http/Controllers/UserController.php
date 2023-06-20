<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\User;

class UserController extends Controller
{
    //User Form create
    public function create(){
        return view('User.register');
    }

    //Store User data to db
    public function store(Request $request){
        $formFields = $request->validate(
            [
            'name'=>'required','min:3',
            'email'=>'required','email',Rule::unique('users','email'),
            'password'=>'required|confirmed|min:6']
        );

        //Hash Password
        $formFields['password']=bcrypt($formFields['password']);

        //Crate User
        $user= User::create($formFields);
        //login user
        Auth()->login($user);
        return redirect('/')->with('message','User created and logged in');
    }

    //User logout 
    public function logout(Request $request){
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/')->with('message','User logged out successfully');
    }

    //User login form
    public function login(){
        return view('User.login');
    }

    public function authenticate(Request $request){
        $formFields = $request->validate(
            [
                'email'=>'required',
                'password'=>'required'
            ]
            );

        if(auth()->attempt($formFields)){
            $request->session()->regenerate();
            return redirect('/')->with('message','You are logged in!');
        }
        return back()->withErrors(['email'=>'Invalid email'])->onlyInput('email');
    }
}
