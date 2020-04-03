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

//route CRUD
Route::get('/databuku','BukuController@index');

Route::get('/databuku/tambah','BukuController@tambah');

Route::post('/databuku/store','BukuController@store');

Route::get('/databuku/edit/{id}','BukuController@edit');

Route::post('/databuku/update','BukuController@update');

Route::get('/databuku/hapus/{id}','BukuController@hapus');