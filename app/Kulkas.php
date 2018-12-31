<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kulkas extends Model
{
    protected $fillable = ['nomor_asset', 'nomor_seri', 'tipe_id', 'kondisi_id', 'tgl_masuk'];


     public function kondisi()
    {
        return $this->belongsTo('App\Kondisi');
    }

    public function tipe()
    {
    	return $this->belongsTo('App\Tipe');
    }
}
