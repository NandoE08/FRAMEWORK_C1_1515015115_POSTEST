<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\ruangan;

class ruanganController extends Controller
{
    public function tambah(){
    	return $this->simpan();
    }
    public function simpan(){
    	$ruangan = new ruangan();
    	$ruangan->title = 'G02-E07';
    	$ruangan->save();
    	return "Data Dengan Username {$ruangan->title} telah disimpan";
    }
}
