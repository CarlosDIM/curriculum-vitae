<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
/*
Route::get('/', function () {
    return view('layouts.principal');
});
*/
Route::get('/','FrontController@index');
Route::get('description','FrontController@description');
Route::get('ourservices','FrontController@ourservices');
Route::get('ourwork','FrontController@ourwork');
Route::get('contact','FrontController@contact');

Route::get('admin','FrontController@admin');