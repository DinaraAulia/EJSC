<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use App\Models\Galeri;
use App\Models\Partner;
use App\Models\Testimoni;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        $agendas   = Agenda::whereDate('tanggal', '>=', now()->toDateString())
                           ->orderBy('tanggal', 'asc')
                           ->get();
        $galeris   = Galeri::latest()->get();
        $partners  = Partner::all();
        $testimonis = Testimoni::where('is_published', true)->take(5)->get();
        $ruangans  = \App\Models\Ruangan::where('is_tersedia', true)->get();

        return view('pages.home', compact(
            'agendas',
            'galeris',
            'partners',
            'testimonis',
            'ruangans'
        ));
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'nama_pengulas' => 'required|string|max:100',
            'rating' => 'required|numeric|min:1|max:5',
            'detail_ulasan' => 'required|string|min:80|max:100',
        ], 
        [
            // Custom message agar user paham batasannya
            'detail_ulasan.min' => 'Ulasan terlalu singkat, ceritakan sedikit lebih banyak pengalaman Anda.',
            'detail_ulasan.max' => 'Ulasan terlalu panjang, ringkas menjadi maksimal 500 karakter.',
        ]);
    
        \App\Models\Testimoni::create([
            'nama_pengulas' => $validated['nama_pengulas'],
            'rating' => $validated['rating'],
            'detail_ulasan' => $validated['detail_ulasan'],
            'tgl_ulasan' => now(),
            'is_published' => false, // Review butuh approval admin dulu agar tidak spam
        ]);
    
        return back()->with('success', 'Terima kasih atas review Anda! Menunggu persetujuan admin.');
    }
}
