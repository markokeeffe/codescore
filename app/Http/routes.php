<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can signup all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('signup',
  ['as' => 'signup', 'uses' => 'SignupController@create']);
Route::post('signup',
  ['as' => 'signup_store', 'uses' => 'SignupController@store']);
Route::get('signup-complete',
  ['as' => 'signup_complete', 'uses' => 'SignupController@complete']);
