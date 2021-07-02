<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\RegisterController;
use App\Http\Controllers\API\JemaatController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('login', 'App\Http\Controllers\JemaatController@login');
Route::post('registrasi', 'App\Http\Controllers\JemaatController@registrasi');
Route::get('getAllPengumuman', 'App\Http\Controllers\JemaatController@getAllPengumuman');
Route::post('getPengumumanByID', 'App\Http\Controllers\JemaatController@getPengumumanByID');
Route::get('getAllRenungan', 'App\Http\Controllers\JemaatController@getAllRenungan');
Route::post('getRenunganByID', 'App\Http\Controllers\JemaatController@getRenunganByID');
Route::get('jemaatTerbaru', 'App\Http\Controllers\JemaatController@getJemaatTerbaru');
