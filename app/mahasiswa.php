<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{
    protected $table = 'mahasiswa';
    protected $fillabel = ['nama','nim','alamat','pengguna_id'];
    protected $guarded = ['id'];
}