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

Route::get('/', 'HomeController@index');
Route::get('dashboard', 'DashboardController@index');
Route::get('prueba/menu', 'MenuPruebaController@menu');

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', ['as' => 'session', 'uses' => 'Auth\AuthController@authenticate']);
Route::get('auth/logout', 'Auth\AuthController@getLogout');
