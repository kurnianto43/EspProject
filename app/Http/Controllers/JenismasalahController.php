<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jenismasalah;

class JenismasalahController extends Controller
{
    public function index()
    {
        $jenismasalahs = Jenismasalah::all();
        return view('jenismasalah.index', compact('jenismasalahs'));
    }


    public function create()
    {
        return view('jenismasalah.tambahdata');
    }


    public function store()
    {
        Jenismasalah::create([
            'kode_masalah' => request ('kode_masalah'),
            'nama_masalah' => request ('nama_masalah')
        ]);

        return redirect()->route('jenismasalah.index')->with('success', 'Data telah ditambahkan');
    }


    public function edit(Jenismasalah $jenismasalah)
    {
        return view('jenismasalah.editdata', compact('jenismasalah'));
    }


    public function update(Jenismasalah $jenismasalah)
    {
        $jenismasalah->update([
            'kode_masalah' => request ('kode_masalah'),
            'nama_masalah' => request ('nama_masalah')
        ]);

        return redirect()->route('jenismasalah.index')->with('info', 'Data telah diubah');
    }


    public function destroy(Jenismasalah $jenismasalah)
    {
        $jenismasalah->delete();

        return redirect()->route('jenismasalah.index')->with('danger', 'Data berhasil dihapus');
    }
}
