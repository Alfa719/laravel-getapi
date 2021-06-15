<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{MahasiswaController};

Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa.index');
Route::get('/mahasiswa/{id}', [MahasiswaController::class, 'show'])->name('mahasiswa.show');
Route::post('/mahasiswa', [MahasiswaController::class, 'store'])->name('mahasiswa.post');
Route::put('/mahasiswa/{id}', [MahasiswaController::class, 'update']);
Route::delete('/mahasiswa/{id}', [MahasiswaController::class, 'destroy'])->name('mahasiswa.delete');
