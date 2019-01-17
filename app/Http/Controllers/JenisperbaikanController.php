<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jenisperbaikan;

class JenisperbaikanController extends Controller
{
    public function index()
    {
        $jenisperbaikans = Jenisperbaikan::all();
        return view('jenisperbaikan.index', compact('jenisperbaikans'));
    }


    public function create()
    {
        return view('jenisperbaikan.tambahdata');
    }


    public function store()
    {
        Jenisperbaikan::create([
            'kode_jenis_perbaikan' => request('kode_jenis_perbaikan'),
            'nama_jenis_perbaikan' => request('nama_jenis_perbaikan'),
            'keterangan_jenis_perbaikan' => request('keterangan_jenis_perbaikan'),
            'biaya_jasa' => request('biaya_jasa')
        ]);

        return redirect()->route('jenisperbaikan.index')->with('success', 'Data telah disimpan');
    }
}
