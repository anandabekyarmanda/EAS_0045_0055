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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('pesan/{id}', 'PesanController@index');
Route::post('pesan/{id}', 'PesanController@pesan');
Route::get('check-out', 'PesanController@check_out');
Route::delete('check-out/{id}', 'PesanController@delete');

Route::get('konfirmasi-check-out', 'PesanController@konfirmasi');

Route::get('profile', 'ProfileController@index');
Route::post('profile', 'ProfileController@update');

Route::get('history', 'HistoryController@index');
Route::get('history/{id}', 'HistoryController@detail');
Route::post('/bukti/store', 'HistoryController@store');

Route::get('cari', 'HomeController@cari');
Route::get('cari2', 'HomeController@cari2');
Route::get('/barangs', 'BarangsController@index');
Route::get('/barangs/tambah', 'BarangsController@tambah');
Route::post('/barangs/store', 'BarangsController@store');
Route::get('/barangs/hapus/{id}','BarangsController@hapus');
Route::get('/barangs/edit/{id}','BarangsController@edit');
Route::post('/barangs/update','BarangsController@update');
Route::post('/bukti/upload', 'BarangsController@store');
Route::get('/laporan', 'BarangsController@laporan');