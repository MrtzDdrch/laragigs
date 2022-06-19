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



// show create form
Route::get('/listings/create', [ListingController::class, 'create']);

// All listings
Route::get('/', [ListingController::class, 'index']);

// Save new listing to database
Route::post('/listings', [ListingController::class, 'store']);

// Show Edit Form
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit']);

// Update Listing
Route::put('/listings/{listing}', [ListingController::class, 'update']);





// Single listing
Route::get('/listing/{listing}', [ListingController::class, 'show']);

// Route::get('/hello', function(){
//     return response("<h1>Hello World</h1>", 404)
//     ->header('Content-Type', 'text/plain')
//     ->header('foo', 'bar');
// });

// Route::get('/posts/{id}', function($id){
//     return response('Post ' . $id);
// })->where('id', '[0-9]+');

// Route::get('/search', function(Request $request){
//     return $request->name . ' ' . $request->city;
// });

// Common Resource Routes:
// index - Show list of all resources
// show - Show single resource
// create - Show form to create new resource
// store - Store new resource
// edit - Show form to edit resource
// update - update resource
// destroy - relete resource