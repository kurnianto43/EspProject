<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teknisi extends Model
{
    protected $fillable = [
        'kode_teknisi', 'nama_teknisi'
    ];
}
