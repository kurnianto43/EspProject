<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teknisi;

class TeknisiController extends Controller
{
    public function index()
    {
        $teknisis=Teknisi::all();
        return view('teknisi.index', compact('teknisis'));
    }


    public function create()
    {
        return view('teknisi.tambahdata');
    }


    public function store()
    {

        Teknisi::create([
            'kode_teknisi' => request('kode_teknisi'),
            'nama_teknisi' => request('nama_teknisi')
        ]);
        return redirect()->route('teknisi.index')->with('success', 'Data telah ditambahkan');
    }

    
    public function edit(Teknisi $teknisi)
    {
        return view('teknisi.editdata', compact('teknisi'));
    }


    public function update(Teknisi $teknisi)
    {
        $teknisi->update([
            'kode_teknisi' => request('kode_teknisi'),
            'nama_teknisi' => request('nama_teknisi')
        ]);

        return redirect()->route('teknisi.index')->with('info', 'Data telah diubah');
    }


    public function destroy(Teknisi $teknisi)
    {
        $teknisi->delete();

        return redirect()->route('teknisi.index')->with('danger', 'Data telah dihapus');
    }
}
