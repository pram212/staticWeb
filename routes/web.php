<?php

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

// jika routenya / dan metodenya get, maka tangani dengan controller 'HomeController' dengan metode show
Route::get('/', 'HomeController@show');

// jika routenya /register dan metodenya get, maka tangani dengan controller'AuthController' dengan metode index 
Route::get('/register', 'AuthController@index');

// jika routenya /welcome dan metodenya 'post', maka tangani dengan controller 'AuthController' dengan metode create
Route::post('/welcome', 'AuthController@create');