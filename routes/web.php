<?php

use App\Http\Controllers\ListingController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;
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
Route::get('/listings/create',[ListingController::class,'create']);
//Store Listing Data
Route::post('listings',[ListingController::class,'store']);
//Single Listing
Route::get('listings/{listing}',[ListingController::class,'show']);
//Show Edit Listing Form
Route::get('listings/{listing}/edit',[ListingController::class,'edit']);
//Update Form Listing
Route::put('listings/{listing}',[ListingController::class,'update']);
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