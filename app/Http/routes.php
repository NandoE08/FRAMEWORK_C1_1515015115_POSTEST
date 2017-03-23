<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function (){
	return view('master');
});

Route::get('pengguna','PenggunaController@awal');
Route::get('pengguna/tambah','PenggunaController@tambah');
// Route::get('pengguna/wew',function(){
// 	$pengguna = new App\pengguna();
//     $pengguna->username = 'wew';
//    	$pengguna->password = 'shiit';
//     $pengguna->save();
//     return "Data Dengan Username {$pengguna->username} telah disimpan";
// });

Route::get('dosen','dosenController@awal');

Route::get('mahasiswa','mahasiswaController@awal');

Route::get('matakuliah','matakuliahController@awal');
Route::get('matakuliah/tambah','matakuliahController@tambah');

Route::get('ruangan','ruanganController@awal');
Route::get('ruangan/tambah','ruanganController@tambah');
// Route::get('dosen_matakuliah','dosen_matakuliahController@tambah');
// Route::get('jadwal_matakuliah','jadwal_matakuliahController@tambah');

Route::get('pengguna/lihat/{pengguna}','PenggunaController@lihat');
Route::post('pengguna/simpan','PenggunaController@simpan');
Route::get('pengguna/edit/{pengguna}','PenggunaController@edit');
Route::post('pengguna/edit/{pengguna}','PenggunaController@update');
Route::get('pengguna/hapus/{pengguna}','PenggunaController@hapus');

Route::get('matakuliah/lihat/{matakuliah}','matakuliahController@lihat');
Route::post('matakuliah/simpan','matakuliahController@simpan');
Route::get('matakuliah/edit/{matakuliah}','matakuliahController@edit');
Route::post('matakuliah/edit/{matakuliah}','matakuliahController@update');
Route::get('matakuliah/hapus/{matakuliah}','matakuliahController@hapus');

Route::get('ruangan/lihat/{ruangan}','ruanganController@lihat');
Route::post('ruangan/simpan','ruanganController@simpan');
Route::get('ruangan/edit/{ruangan}','ruanganController@edit');
Route::post('ruangan/edit/{ruangan}','ruanganController@update');
Route::get('ruangan/hapus/{ruangan}','ruanganController@hapus');