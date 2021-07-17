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

//routing mahasiswa
Route::get('mahasiswa', 'mahasiswaController@index')->name('mahasiswa');

Route::get('mahasiswa-create', 'MahasiswaController@create')->name('tambah.mahasiswa');

Route::POST('mahasiswa-store', 'MahasiswaController@create')->name('simpan.mahasiswa');

Route::get('mahasiswa-edit/{id}', 'MahasiswaController@create')->name('edit.mahasiswa');

Route::POST('mahasiswa-update/{id}', 'MahasiswaController@create')->name('update.mahasiswa');

Route::get('mahasiswa-hapus/{id}', 'MahasiswaController@create')->name('hapus.mahasiswa');


//Routing makul
Route::get('makul', 'MakulController@index')->name('makul');

Route::get('makul-create', 'MakulController@create')->name('makul.create');

Route::post('simpan-data', 'MakulController@store')->name('simpan.data');

route::get('edit-makul/{id}', 'MakulController@edit')->name('makul.edit');

route::post('update-makul/{id}', 'MakulController@update')->name('update.makul');

route::get('hapus-makul/{id}', 'MakulController@destroy')->name('makul.hapus');

//routing nilai
Route::get('nilai', 'NilaiController@index')->name('nilai');

Route::get('nilai-create', 'NilaiController@create')->name('tambah.nilai');

Route::POST('nilai-store', 'NilaiController@create')->name('simpan.nilai');

Route::get('nilai-edit/{id}', 'NilaiController@create')->name('edit.nilai');

Route::POST('nilai-update/{id}', 'NilaiController@create')->name('update.nilai');

Route::get('nilai-hapus/{id}', 'NilaiController@create')->name('hapus.nilai');
