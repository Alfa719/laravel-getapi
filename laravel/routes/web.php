<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{MahasiswaController};

Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa.index');
Route::post('/mahasiswa', [MahasiswaController::class, 'store'])->name('mahasiswa.post');
Route::put('/mahasiswa/{$id}', [MahasiswaController::class, 'update']);
Route::post('/mahasiswa/{$id}', [MahasiswaController::class, 'destroy']);
