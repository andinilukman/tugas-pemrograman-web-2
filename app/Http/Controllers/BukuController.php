<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index()
    {
        return view('buku.index',[
            'title' => 'Data Buku',
            'bukus' => Buku::latest()->get(),
        ]);
    }

    public function create()
    {
        return view('buku.create',[
            'title' => 'Tambah Data Buku',
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'judul' => 'required|max:255',
            'penulis' => 'required|max:255',
            'penerbit' => 'required|max:255',
            'tahun_terbit' => 'required|integer',
            'genre' => 'required|max:255',
        ]);

        Buku::create($validatedData);

        return redirect()->route('Buku.index')->with('success', 'Data buku berhasil ditambahkan.');
    }
}
