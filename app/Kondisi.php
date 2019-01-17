<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kondisi extends Model
{
    protected $fillable = ['nama_kondisi'];

    public function gdm()
    {
    	return $this->hasMany('App\Kulkas');
    }
}
