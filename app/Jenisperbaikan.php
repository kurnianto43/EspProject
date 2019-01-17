<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jenisperbaikan extends Model
{
    protected $fillable = ([
            'kode_jenis_perbaikan', 'nama_jenis_perbaikan', 'keterangan_jenis_perbaikan', 'biaya_jasa'
    ]);
}
