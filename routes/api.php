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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/notes' , 'NoteController@list');
Route::get('/notes/{id}' , 'NoteController@get');
Route::put('/notes/{id}' , 'NoteController@update');
Route::post('/notes/' , 'NoteController@create');
Route::delete('/notes/{id}' , 'NoteController@delete');
