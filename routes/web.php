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
// TUGAS PEKAN 3 HARI KE 2 - INSTALASI LARAVEL

// jika routenya / dan metodenya get, maka tangani dengan controller 'HomeController' dengan metode show
Route::get('/', 'HomeController@show');

// jika routenya /register dan metodenya get, maka tangani dengan controller'AuthController' dengan metode index 
Route::get('/register', 'AuthController@index');

// jika routenya /welcome dan metodenya 'post', maka tangani dengan controller 'AuthController' dengan metode create
Route::post('/welcome', 'AuthController@create');

// TUGAS PEKAN 3 HARI KE 3 - TEMPLATING BLADE
Route::get('/tables', function(){
	return view('week3day3and5.tables');
});
Route::get('/datatables', function(){
	return view('week3day3and5.dataTables');
});

 
// TUGAS PEKAN 3 HARI KE 5 - CRUD
Route::get('/cast', 'CastController@index'); // menampilkan list data para pemain film
Route::get('/cast/create', 'CastController@create'); // menampilkan form untuk menambahkan data 
Route::post('/cast', 'CastController@store'); //menyimpan data baru ke tabel cast
Route::get('/cast/{cast_id}', 'CastController@show'); // menampilkan detail
Route::get('/cast/{cast_id}/edit', 'CastController@edit'); // menampilkan form untuk edit
Route::put('/cast/{cast_id}', 'CastController@update'); // menyimpan perubahan 
Route::delete('/cast/{cast_id}', 'CastController@destroy'); // menghapus data

