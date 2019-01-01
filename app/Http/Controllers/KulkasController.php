<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kulkas;
use App\Tipe;
use App\Kondisi;
use PDF;
use Carbon\Carbon;

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

    	return redirect()->route('kulkas.index')->with('success', ' Data telah ditambahkan');
    }

    public function edit()
    {
        return view('kulkas.edit');
    }

    public function create_pdf()
    {
        $kondisis = Kondisi::all();
        $tipes = Tipe::all();
        $kulkas = Kulkas::all();
        $tgl = Carbon::now()->format('d-m-Y');
        $pdf = PDF::loadView('kulkas.pdfInstore', compact('kulkas', 'tgl'));
        $pdf->setPaper('a4', 'potrait');
        return $pdf->download('data-instore-kulkas.pdf', compact('kulkas'));
    }

    public function getCreatedAtAttribute()
    {
        return \Carbon\Carbon::parse($this->attributes['tgl_masuk'])->format('d, M Y H:i');
    }

}
