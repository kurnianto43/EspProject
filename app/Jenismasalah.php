<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jenismasalah extends Model
{
    protected $fillable = [
        'kode_masalah', 'nama_masalah'
    ];
}
