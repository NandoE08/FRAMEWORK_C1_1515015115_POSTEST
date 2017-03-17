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

// Route::get('/', function (){
// 	return view 'Welcome';
// });

Route::get('pengguna','PenggunaController@awal');
Route::get('pengguna/tambah','PenggunaController@tambah');
// Route::get('pengguna/wew',function(){
// 	$pengguna = new App\pengguna();
//     $pengguna->username = 'wew';
//    	$pengguna->password = 'shiit';
//     $pengguna->save();
//     return "Data Dengan Username {$pengguna->username} telah disimpan";
// });

Route::get('dosen','dosenController@tambah');
Route::get('mahasiswa','mahasiswaController@tambah');
Route::get('matakuliah','matakuliahController@tambah');
Route::get('ruangan','ruanganController@tambah');
Route::get('dosen_matakuliah','dosen_matakuliahController@tambah');
Route::get('jadwal_matakuliah','jadwal_matakuliahController@tambah');