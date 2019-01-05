<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sukucadang;

class SukucadangController extends Controller
{
    public function index()
    {
    	$sukucadangs = Sukucadang::all();
    	return view('sukucadang.index', compact('sukucadangs'));
    }


    public function create()
    {
    	return view('sukucadang.tambahdata');
    }


    public function store()
    {
    	Sukucadang::create([
    		'nomor_suku_cadang' => request('nomor_suku_cadang'),
    		'nama_suku_cadang' => request('nama_suku_cadang'),
    		'jumlah_suku_cadang' => request('jumlah_suku_cadang'),
    	]);

    	return redirect()->route('sukucadang.index')->with('success', ' Data telah ditambahkan');
    }


    public function edit(Sukucadang $sukucadang)
    {
    	return view('sukucadang.editdata', compact('sukucadang'));
    }


    public function update(Sukucadang $sukucadang)
    {
    	$sukucadang->update([
    		'nomor_suku_cadang' => request('nomor_suku_cadang'),
    		'nama_suku_cadang' => request('nama_suku_cadang'),
    		'jumlah_suku_cadang' => request('jumlah_suku_cadang'),
    	]);

    	return redirect()->route('sukucadang.index')->with('info', ' Data telah diubah');
    }


    public function destroy(Sukucadang $sukucadang)
    {
    	$sukucadang->delete();
    	return redirect()->route('sukucadang.index')->with('danger', ' Data telah dihapus');
    }

}
