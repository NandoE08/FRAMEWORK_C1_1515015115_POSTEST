<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\matakuliah;

class matakuliahController extends Controller
{
    public function tambah(){
    	return $this->simpan();
    }
    public function simpan(){
    	$matakuliah = new matakuliah();
    	$matakuliah->title = 'Geometry';
    	$matakuliah->keterangan = 'Materi Study';
    	$matakuliah->save();
    	return "Data Dengan Username {$matakuliah->title} telah disimpan";
    }
}
