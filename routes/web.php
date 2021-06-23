<?php

use Illuminate\Support\Facades\Route;

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

//Route::resource('jemaat', 'App\Http\Controllers\JemaatController');

Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index');

Route::get('/datajemaat', 'App\Http\Controllers\ManajemenJemaatController@index');
Route::get('/datajemaat/{nij}', 'App\Http\Controllers\ManajemenJemaatController@getDataByNIJ');
Route::post('/datajemaat/tambah', 'App\Http\Controllers\ManajemenJemaatController@tambah');
Route::get('/datajemaat/hapus/{nij}', 'App\Http\Controllers\ManajemenJemaatController@hapus');
Route::get('/datajemaat/view/{nij}', 'App\Http\Controllers\ManajemenJemaatController@viewEdit');
Route::post('/datajemaat/edit', 'App\Http\Controllers\ManajemenJemaatController@edit');

Route::get('/administrasi', 'App\Http\Controllers\AdministrasiController@index');
Route::post('/administrasi/cetak', 'App\Http\Controllers\AdministrasiController@cetak');


Route::get('/renungan', 'App\Http\Controllers\ManajemenRenunganController@index');
Route::post('/renungan/tambah', 'App\Http\Controllers\ManajemenRenunganController@tambah');
Route::get('/renungan/{id}', 'App\Http\Controllers\ManajemenRenunganController@getRenunganByID');
Route::get('/renungan/hapus/{id}', 'App\Http\Controllers\ManajemenRenunganController@hapus');
Route::get('/renungan/view/{id}', 'App\Http\Controllers\ManajemenRenunganController@viewEdit');
Route::post('/renungan/edit', 'App\Http\Controllers\ManajemenRenunganController@edit');


Route::get('/pengumuman', 'App\Http\Controllers\ManajemenPengumumanController@index');
Route::post('/pengumuman/tambah', 'App\Http\Controllers\ManajemenPengumumanController@tambah');
Route::get('/pengumuman/{id}', 'App\Http\Controllers\ManajemenPengumumanController@getPengumumanByID');
Route::get('/pengumuman/hapus/{id}', 'App\Http\Controllers\ManajemenPengumumanController@hapus');
Route::get('/pengumuman/view/{id}', 'App\Http\Controllers\ManajemenPengumumanController@viewEdit');
Route::post('/pengumuman/edit', 'App\Http\Controllers\ManajemenPengumumanController@edit');