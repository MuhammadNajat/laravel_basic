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

Route::get('/', function () {
    return view('welcome');
});

Route::get('auth/github', 'Auth\AuthController@redirectToProvider');
Route::get('auth/github/callback', 'Auth\AuthController@handleProviderCallback');

Route::get('/about','AdminController@about');
Route::get('/layout','AdminController@layout');
Route::get('/contact','AdminController@contact');
Route::get('/allContact','AdminController@allContact');
Route::post('/save_contact','AdminController@save_contact');
Route::get('/delete_contact/{id}','AdminController@delete_contact');
Route::get('/edit_contact/{id}','AdminController@edit_contact');
Route::post('/contact_update/{id}','AdminController@contact_update');

Route::auth();

Route::get('/home', 'HomeController@index');
