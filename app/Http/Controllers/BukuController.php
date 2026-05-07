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

    public function edit($id)
    {
        $buku = Buku::findOrFail($id);

        return view('Buku.edit', compact('buku'));
    }

    public function update(Request $request, $id)
    {
        $buku = Buku::findOrFail($id);

        $buku->update([
            'judul' => $request->judul,
            'penulis' => $request->penulis,
            'penerbit' => $request->penerbit,
            'tahun_terbit' => $request->tahun_terbit,
            'genre' => $request->genre,
        ]);

        return redirect('/')->with('success', 'Data berhasil diupdate');
    }

    public function destroy($id)
    {
        $buku = Buku::findOrFail($id);
        $buku->delete();

        return redirect('/')->with('success', 'Data berhasil dihapus');
    }
}
