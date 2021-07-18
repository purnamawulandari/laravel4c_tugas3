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
Route::get('mahasiswa','MahasiswaController@index')->name('mahasiswa');

Route::get('tambah-mahasiswa', 'MahasiswaController@create')->name('tambah.mahasiswa');

Route::post('simpan-mahasiswa', 'MahasiswaController@store')->name('simpan.mahasiswa');

Route::get('edit-mahasiswa/{id}', 'mahasiswaController@edit')->name('edit.mahasiswa');

Route::post('update-mahasiswa/{id}', 'mahasiswaController@update')->name('update.mahasiswa');

Route::get('hapus-mahasiswa/{id}', 'mahasiswaController@destroy')->name('hapus.mahasiswa');

//Routing makul
Route::get('makul','MakulController@index')->name('makul');

Route::get('makul-create','MakulController@create')->name('tambah.makul');

Route::POST('makul-simpan','MakulController@store')->name('simpan.makul');

Route::get('makul-edit/{id}','MakulController@edit')->name('edit.makul');

Route::POST('makul-update/{id}','MakulController@update')->name('update.makul');

Route::get('makul-hapus/{id}','MakulController@destroy')->name('hapus.makul');


//Routing Nilai
Route::get('nilai', 'NilaiController@index')->name('nilai');
Route::get('nilai-create', 'NilaiController@create')->name('nilai.create');
Route::post('nilai-simpan', 'NilaiController@store')->name('nilai.simpan');
Route::get('nilai-edit/{id}', 'NilaiController@edit')->name('nilai.edit');
Route::post('nilai-update/{id}', 'NilaiController@update')->name('nilai.update');
Route::get('nilai-hapus/{id}', 'NilaiController@destroy')->name('nilai.hapus');