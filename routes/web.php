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

Route::get('/', function () {
    return view('home');
});

Route::get('/proyek', 'ProyekController@index'); // menampilkan semua

Route::get('/proyek/create', 'ProyekController@create'); // menampilkan halaman form

Route::post('/proyek', 'ProyekController@store'); // menyimpan data

Route::get('/proyek/{id}/daftarkan-staff', 'ProyekController@staff');

Route::post('/proyek/{id}/daftarkan-staff', 'ProyekController@daftarstaff');

Route::get('/proyek/{id}/edit', 'ProyekController@edit');

Route::put('/proyek/{id}', 'ProyekController@update');

Route::delete('/proyek/{id}', 'ProyekController@destroy');
