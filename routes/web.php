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

Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index')->middleware('auth')->name('dashboard');

Route::get('/datajemaat', 'App\Http\Controllers\ManajemenJemaatController@index')->middleware('auth')->name('datajemaat');
Route::get('/datajemaat/{nij}', 'App\Http\Controllers\ManajemenJemaatController@getDataByNIJ')->middleware('auth')->name('datajemaat');
Route::post('/datajemaat/tambah', 'App\Http\Controllers\ManajemenJemaatController@tambah')->middleware('auth')->name('datajemaat');
Route::get('/datajemaat/hapus/{nij}', 'App\Http\Controllers\ManajemenJemaatController@hapus')->middleware('auth')->name('datajemaat');
Route::get('/datajemaat/view/{nij}', 'App\Http\Controllers\ManajemenJemaatController@viewEdit')->middleware('auth')->name('datajemaat');
Route::post('/datajemaat/edit', 'App\Http\Controllers\ManajemenJemaatController@edit')->middleware('auth')->name('datajemaat');
Route::get('/datajemaat/kk/{kk}', 'App\Http\Controllers\ManajemenJemaatController@getDataByKK')->middleware('auth')->name('datajemaat');


Route::get('/administrasi', 'App\Http\Controllers\AdministrasiController@index')->middleware('auth')->name('administrasi');
Route::post('/administrasi/cetak', 'App\Http\Controllers\AdministrasiController@cetak')->middleware('auth')->name('administrasi');


Route::get('/renungan', 'App\Http\Controllers\ManajemenRenunganController@index')->middleware('auth')->name('renungan');
Route::post('/renungan/tambah', 'App\Http\Controllers\ManajemenRenunganController@tambah')->middleware('auth')->name('renungan');
Route::get('/renungan/{id}', 'App\Http\Controllers\ManajemenRenunganController@getRenunganByID')->middleware('auth')->name('renungan');
Route::get('/renungan/hapus/{id}', 'App\Http\Controllers\ManajemenRenunganController@hapus')->middleware('auth')->name('renungan');
Route::get('/renungan/view/{id}', 'App\Http\Controllers\ManajemenRenunganController@viewEdit')->middleware('auth')->name('renungan');
Route::post('/renungan/edit', 'App\Http\Controllers\ManajemenRenunganController@edit')->middleware('auth')->name('renungan');


Route::get('/pengumuman', 'App\Http\Controllers\ManajemenPengumumanController@index')->middleware('auth')->name('pengumuman');
Route::post('/pengumuman/tambah', 'App\Http\Controllers\ManajemenPengumumanController@tambah')->middleware('auth')->name('pengumuman');
Route::get('/pengumuman/{id}', 'App\Http\Controllers\ManajemenPengumumanController@getPengumumanByID')->middleware('auth')->name('pengumuman');
Route::get('/pengumuman/hapus/{id}', 'App\Http\Controllers\ManajemenPengumumanController@hapus')->middleware('auth')->name('pengumuman');
Route::get('/pengumuman/view/{id}', 'App\Http\Controllers\ManajemenPengumumanController@viewEdit')->middleware('auth')->name('pengumuman');
Route::post('/pengumuman/edit', 'App\Http\Controllers\ManajemenPengumumanController@edit')->middleware('auth')->name('pengumuman');

Route::get('/home', 'App\Http\Controllers\ManajemenHomeController@index')->middleware('auth')->name('home');
Route::post('/home/tambah', 'App\Http\Controllers\ManajemenHomeController@tambah')->middleware('auth')->name('home');
Route::get('/home/hapus/{id}', 'App\Http\Controllers\ManajemenHomeController@hapus')->middleware('auth')->name('home');
Route::get('/home/view/{id}', 'App\Http\Controllers\ManajemenHomeController@viewEdit')->middleware('auth')->name('home');
Route::post('/home/edit', 'App\Http\Controllers\ManajemenHomeController@edit')->middleware('auth')->name('home');
