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

//routing baru
Route::get('mahasiswa', 'Mahasiswacontroller@index');

Route::get('mahasiswa-create', 'Mahasiswacontroller@create');

//Routing makul
Route::get('makul', 'MakulController@index')->name('makul');
Route::get('makul-create', 'MakulController@create')->name('makul.create');
Route::post('simpan-data', 'MakulController@store')->name('simpan.data');

route::get('edit-makul/{id}', 'MakulController@edit')->name('makul.edit');
route::post('update-makul/{id}', 'MakulController@update')->name('update.makul');
route::get('hapus-makul/{id}', 'MakulController@destroy')->name('makul.hapus');