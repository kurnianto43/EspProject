<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sukucadang;

class PerbaikanController extends Controller
{
    public function tambahPerbaikan()
    {

        return view('perbaikan.tambah', compact('sukucadangs'));
    }


}
