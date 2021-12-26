<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


// Create a Ground as well as middleware too :: verifyapitoken (For Authentication).
Route::group(['middleware'=>['verifyapitoken','api']], function() {

    Route::get('books','bookController@getBooksList'); // All Books List.
    Route::get('getbookdetals','bookController@getbookdetals'); // Single Book Details.
    Route::post('addBook','bookController@addBook'); // Add new Book.   
    Route::post('bookUpdate/{id}','bookController@bookUpdate'); //Upadate he Existing Book.
    Route::get('deleteBook/{id}','bookController@deleteBook'); // Delete the Book.
});
