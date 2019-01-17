<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tipe;

class TipeController extends Controller
{
    public function index()
    {
        $tipes = Tipe::all();
        return view('tipe.index', compact('tipes'));
    }


    public function create()
    {
        return view('tipe.tambahdata');
    }


    public function store()
    {
        Tipe::create([
            'nama_tipe' => request ('nama_tipe')
        ]);

        return redirect()->route('tipe.index')->with('success', 'Data telah ditambahkan');
    }


    public function edit(Tipe $tipe)
    {
        return view('tipe.editdata', compact('tipe'));
    }


    public function update(Tipe $tipe)
    {
        $tipe->update([
            'nama_tipe' => request ('nama_tipe')
        ]);

        return redirect()->route('tipe.index')->with('info', 'Data telah diubah');
    }


    public function destroy(Tipe $tipe)
    {
        $tipe->delete();

        return redirect()->route('tipe.index')->with('danger', 'Data berhasil dihapus');
    }
}
