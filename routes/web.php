<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


Route::get('/','CardsController@index');
Route::get('/cards/{card}','CardsController@show');

Route::get('/notes','NotesController@index');
Route::post('notes/{card}','NotesController@store');

Route::get('sample','CardsController@qrSearch');
