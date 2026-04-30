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
}
