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

Route::get('/administrasi', 'App\Http\Controllers\AdministrasiController@index');
Route::post('/administrasi/cetak', 'App\Http\Controllers\AdministrasiController@cetak');


Route::get('/renungan', 'App\Http\Controllers\ManajemenRenunganController@index');


Route::get('/pengumuman', 'App\Http\Controllers\ManajemenPengumumanController@index');
