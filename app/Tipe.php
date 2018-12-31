<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipe extends Model
{
    protected $fillable = ['nama'];

    public function gdm()
    {
    	return $this->hasMany('App\Kulkas');
    }
}
