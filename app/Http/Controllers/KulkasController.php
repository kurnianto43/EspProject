<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kulkas;
use App\Tipe;
use App\Kondisi;

class KulkasController extends Controller
{
    public function index()
    {
        $kulkas=Kulkas::all();
    $tipes=Tipe::all();
    $kondisi=Kondisi::all();
    	return view('kulkas.index', compact('kulkas', 'tipes', 'kondisis'));
    }

    public function create()
    {

    	$tipes=Tipe::all();
        $kondisis=Kondisi::all();
    	return view('kulkas.tambah', compact('tipes', 'kondisis'));
    }

    public function store()
    {
    	Kulkas::create([

    		'nomor_asset' => request('nomor_asset'),
    		'nomor_seri' => request('nomor_seri'),
    		'tipe_id' => request('tipe_id'),
    		'kondisi_id' => request('kondisi_id'),
    		'tgl_masuk' => request('tgl_masuk'),

    	]);

    	return redirect()->route('kulkas.index');
    }
}
