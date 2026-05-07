<?php

use App\Http\Controllers\BukuController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BukuController::class, 'index']);

Route::get('/create', [BukuController::class, 'create']);

Route::post('/store', [BukuController::class, 'store']);

Route::get('/edit/{id}', [BukuController::class, 'edit']);

Route::put('/update/{id}', [BukuController::class, 'update']);

Route::delete('/delete/{id}', [BukuController::class, 'destroy']);