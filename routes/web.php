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



//Pert1112

//menampilkan data mahasiswa
Route::get('/mahasiswas', 'MahasiswaController@index')->name('mahasiswa.index')
->middleware('auth');

//akses view form tambah barang
Route::get('/mahasiswas/create', 'MahasiswaController@create')->name('mahasiswas.create')
->middleware('auth');

//simpan data barang
Route::post('/mahasiswas', 'MahasiswaController@store')->name('mahasiswas.store');

//detail data
Route::get('/mahasiswas/{mahasiswa}','MahasiswaController@detail')->name('mahasiswas.detail')
->middleware('auth');

//menampilkan form updatae
Route::get('/mahasiswas/{mahasiswa}/edit','MahasiswaController@edit')->name('mahasiswas.edit')
->middleware('auth');

//updatae data ke database
Route::put('/mahasiswas/{mahasiswa}', 'MahasiswaController@update')->name('mahasiswas.update');

//route menghapus barang
Route::delete('/mahasiswas/{mahasiswa}', 'MahasiswaController@delete')->name('mahasiswas.delete')
->middleware('auth');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
