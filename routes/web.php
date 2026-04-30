<?php

use App\Http\Controllers\BukuController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BukuController::class, 'index'])->name('Buku.index');
Route::get('/create', [BukuController::class, 'create'])->name('Buku.create');
Route::post('/store', [BukuController::class, 'store'])->name('Buku.store');
