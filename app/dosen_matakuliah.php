<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dosen_matakuliah extends Model
{
    protected $table = 'dosen_matakuliah';
    protected $fillabel = ['dosen_id','matakuliah_id'];
    protected $guarded = ['id'];

    public function dosen(){
    	return $this->belongsTo(dosen::class);
	}

	public function matakuliah(){
		return $this->belongsTo(matakuliah::class);
	}
	public function jadawal_matakuliah(){
		return $this->hasMany(jadwal_matakuliah::class,'dosen_matakuliah_id');
	}

}
