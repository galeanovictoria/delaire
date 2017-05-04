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


Route::get('login', 'Auth\AuthController@showLoginForm');
Route::post('login', 'Auth\AuthController@login');
Route::get('logout', 'Auth\AuthController@logout');

        // Password Reset Routes...
Route::get('password/reset/{token?}', 'Auth\PasswordController@showResetForm');
Route::post('password/email', 'Auth\PasswordController@sendResetLinkEmail');
Route::post('password/reset', 'Auth\PasswordController@reset');

Route::get('/home', 'HomeController@index');

Route::get('/', 'ProjectsController@index');

Route::get('index', 'ProjectsController@index');

Route::post('contact', 'contactsController@store');

Route::get('/admin', function(){
    return view('admin');
})->middleware('auth');

Route::post('/fileUpload', 'FilesController@store');

Route::get('/thankyou', 'contactController@showthanks');

Route::post('newsletter', 'contactsController@newsletter');