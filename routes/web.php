<?php

use App\Http\Controllers\AgendaController;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\PengunjungController;
use App\Http\Controllers\RuanganController;
use Illuminate\Support\Facades\Route;

// Landing Page
Route::get('/', [LandingController::class, 'index'])->name('home');

// Ruangan
Route::get('/ruangan', [RuanganController::class, 'index'])->name('ruangan.index');
Route::get('/ruangan/{id}', [RuanganController::class, 'show'])->name('ruangan.show');
Route::get('/workspace/{slug}', [RuanganController::class, 'workspaceShow'])->name('workspace.show');

// Fasilitas
Route::get('/fasilitas', [FasilitasController::class, 'index'])->name('fasilitas.index');

// Agenda
Route::get('/agenda', [AgendaController::class, 'index'])->name('agenda.index');

// Pengunjung (Buku Tamu)
Route::get('/daftar-pengunjung', [PengunjungController::class, 'create'])->name('pengunjung.create');
Route::post('/daftar-pengunjung', [PengunjungController::class, 'store'])->name('pengunjung.store');

// Peminjaman Ruangan
Route::get('/peminjaman', [PeminjamanController::class, 'create'])->name('peminjaman.create');
Route::post('/peminjaman', [PeminjamanController::class, 'store'])->name('peminjaman.store');
