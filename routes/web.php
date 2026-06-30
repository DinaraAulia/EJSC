<?php

use App\Http\Controllers\AgendaController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\RuanganController;
use Illuminate\Support\Facades\Route;

// Landing Page
Route::get('/', [LandingController::class, 'index'])->name('home');

// Talenta Space
Route::get('/talenta', [\App\Http\Controllers\TalentaController::class, 'index'])->name('talenta');

// UMKM Space
Route::get('/umkm', [\App\Http\Controllers\UmkmController::class, 'index'])->name('umkm');

// Achievement
Route::get('/achievement', [\App\Http\Controllers\AchievementController::class, 'index'])->name('achievement.index');

// Ruangan
Route::get('/ruangan', [RuanganController::class, 'index'])->name('ruangan.index');
Route::get('/ruangan/{id}', [RuanganController::class, 'show'])->name('ruangan.show');
Route::get('/workspace/{slug}', [RuanganController::class, 'workspaceShow'])->name('workspace.show');

// Gallery
Route::get('/gallery/{id}', [\App\Http\Controllers\GaleriController::class, 'show'])->name('gallery.show');

// Agenda
Route::get('/agenda', [AgendaController::class, 'index'])->name('agenda.index');

// Peminjaman Ruangan
Route::get('/peminjaman', [PeminjamanController::class, 'create'])->name('peminjaman.create');
Route::post('/peminjaman', [PeminjamanController::class, 'store'])->name('peminjaman.store');
Route::post('/peminjaman/check', [PeminjamanController::class, 'check'])->name('peminjaman.check');

// Dynamic Sitemap
Route::get('/sitemap.xml', function () {
    $urls = [
        ['loc' => url('/'), 'lastmod' => now()->toDateString(), 'changefreq' => 'weekly', 'priority' => '1.0'],
        ['loc' => url('/talenta'), 'lastmod' => now()->toDateString(), 'changefreq' => 'monthly', 'priority' => '0.9'],
        ['loc' => url('/umkm'), 'lastmod' => now()->toDateString(), 'changefreq' => 'monthly', 'priority' => '0.9'],
        ['loc' => url('/achievement'), 'lastmod' => now()->toDateString(), 'changefreq' => 'monthly', 'priority' => '0.8'],
        ['loc' => url('/ruangan'), 'lastmod' => now()->toDateString(), 'changefreq' => 'weekly', 'priority' => '0.9'],
        ['loc' => url('/agenda'), 'lastmod' => now()->toDateString(), 'changefreq' => 'weekly', 'priority' => '0.8'],
        ['loc' => url('/peminjaman'), 'lastmod' => now()->toDateString(), 'changefreq' => 'monthly', 'priority' => '0.7'],
    ];

    // Add workspace pages dynamically
    $ruangans = \App\Models\Ruangan::where('is_tersedia', true)->get();
    foreach ($ruangans as $ruangan) {
        $urls[] = [
            'loc' => url('/workspace/' . $ruangan->slug),
            'lastmod' => $ruangan->updated_at ? $ruangan->updated_at->toDateString() : now()->toDateString(),
            'changefreq' => 'monthly',
            'priority' => '0.7',
        ];
    }

    return response()->view('sitemap', compact('urls'))
        ->header('Content-Type', 'application/xml');
})->name('sitemap');
