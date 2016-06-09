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

Route::get('/', [
    'uses' => 'HomeController@index',
    'as'   => 'home'
]);

Route::get('/auth/register', [
    'uses'  => 'AuthController@getSignUp',
    'as'    => 'signup'
]);

Route::post('/auth/register', [
    'uses'  => 'AuthController@postSignUp',
]);

/**
* Authentication routes
*/
Route::get('/auth/login', [
   'uses'       => 'AuthController@getLogin',
   'as'         => 'login',
   'middleware' => ['guest']
]);

Route::post('/auth/login', [
   'uses' => 'AuthController@postLogin'
]);

Route::get('/logout', [
    'uses' => 'AuthController@getLogout',
    'as'   => 'logout'
]);
