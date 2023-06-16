<?php

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//get all listing
//Resource Method naming
// Index => Show all listing
// Show => show single listing
// Create => show form to create new listing
// Store => Store new listing
// Edit => Show form to edit listingSSSS
// Update => Update listing
// Destory => Delete listing

//All Listing
Route::get('/', [ListingController::class,'index']);
//Show Create Listing Form
Route::get('/listings/create',[ListingController::class,'create'])->middleware('auth');
//Store Listing Data
Route::post('listings',[ListingController::class,'store'])->middleware('auth');
//Manage listing
Route::get('listings/manage',[ListingController::class,'manage'])->middleware('auth');

//Single Listing
Route::get('listings/{listing}',[ListingController::class,'show']);
//Show Edit Listing Form
Route::get('listings/{listing}/edit',[ListingController::class,'edit'])->middleware('auth');
//Update Form Listing
Route::put('listings/{listing}',[ListingController::class,'update'])->middleware('auth');
//Delete Listing
Route::delete('listings/{listing}',[ListingController::class,'destory'])->middleware('auth');

//User Registration Form
Route::get('register',[UserController::class,'create'])->middleware('guest');

//User Storing To DB
Route::post('users',[UserController::class,'store']);

//User Logged out
Route::post('logout',[UserController::class,'logout'])->middleware('auth');

//User login Form
Route::get('login',[UserController::class,'login'])->name('login')->middleware('guest');

//User Authenticate
Route::post('users/authenticate',[UserController::class,'authenticate']);


// Route::get('hello',function(){
//     return response('Hello World');
// });

// Route::get('/post/{id}', function($id){
   // ddd($id);
//     return response('POST '. $id);
// })->where('id','[0-9]+');

// Route::get('search',function(Request $request){
//     dd($request->name.' '. $request->city);
// });