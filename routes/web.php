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

Route::get('praktikum1', function () {
    return view('prak1web');
});

Route::get('tugas4', function () {
    return view('tugas4');
});

Route::get('praktikum2','ViewController@showPraktikum2');

Route::get('ets','ViewController@showEts');



Route::post('welcome','ViewController@greetingsphp');

Route::get('tugasphp','ViewController@formphp');





//route CRUD
Route::get('/pegawai','PegawaiController@index');

Route::get('/pegawai/tambah','PegawaiController@tambah');

Route::post('/pegawai/store','PegawaiController@store');

Route::get('/pegawai/edit/{id}','PegawaiController@edit');

Route::post('/pegawai/update','PegawaiController@update');

Route::get('/pegawai/hapus/{id}','PegawaiController@hapus');

Route::get('/pegawai/cari','PegawaiController@cari');

Route::get('/pegawai/detail/{id}','PegawaiController@view');


Route::get('/mutasi','MutasiController@index');

Route::get('/mutasi/tambah','MutasiController@tambah');

Route::post('/mutasi/store','MutasiController@store');

Route::get('/mutasi/edit/{ID}','MutasiController@edit');

Route::post('/mutasi/update','MutasiController@update');

Route::get('/mutasi/hapus/{ID}','MutasiController@hapus');

Route::get('/mutasi/cari','MutasiController@cari');


Route::get('/absen','AbsenController@index');
Route::get('/absen/tambah','AbsenController@tambah');
Route::post('/absen/store','AbsenController@store');
Route::get('/absen/edit/{id}','AbsenController@edit');
Route::post('/absen/update','AbsenController@update');
Route::get('/absen/hapus/{id}','AbsenController@hapus');
Route::get('/absen/cari','AbsenController@cari');


Route::get('/harddisk','HarddiskController@index');

Route::get('/harddisk/tambah','HarddiskController@tambah');

Route::post('/harddisk/store','HarddiskController@store');

Route::get('/harddisk/edit/{id}','HarddiskController@edit');

Route::post('/harddisk/update','HarddiskController@update');

Route::get('/harddisk/hapus/{id}','HarddiskController@hapus');

Route::get('/harddisk/cari','HarddiskController@cari');

Route::get('/harddisk/detail/{id}','HarddiskController@view');



Route::get('/nilaikuliah','nilaikuliahController@index');

Route::get('/nilaikuliah/tambah','nilaikuliahController@tambah');

Route::post('/nilaikuliah/store','nilaikuliahController@store');



