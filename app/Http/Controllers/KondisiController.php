<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kondisi;

class KondisiController extends Controller
{
    public function index()
    {
        $kondisis = Kondisi::all();
        return view('kondisi.index', compact('kondisis'));
    }


    public function create()
    {
        return view('kondisi.tambahdata');
    }


    public function store()
    {
        Kondisi::create([
            'nama_kondisi' => request ('nama_kondisi')
        ]);

        return redirect()->route('kondisi.index')->with('success', 'Data telah ditambahkan');
    }


    public function edit(Kondisi $kondisi)
    {
        return view('kondisi.editdata', compact('kondisi'));
    }


    public function update(Kondisi $kondisi)
    {
        $kondisi->update([
            'nama_kondisi' => request ('nama_kondisi')
        ]);

        return redirect()->route('kondisi.index')->with('warning', 'Data telah diubah');
    }


    public function destroy(Kondisi $kondisi)
    {
        $kondisi->delete();

        return redirect()->route('kondisi.index')->with('danger', 'Data berhasil dihapus');
    }


}
