<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use App\Models\Ruangan;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PeminjamanController extends Controller
{
    public function create()
    {
        $ruangans = Ruangan::where('is_tersedia', true)->get();
        return view('peminjaman.create', compact('ruangans'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_kegiatan'     => 'required|string|max:100',
            'latar_belakang'    => 'nullable|string|max:100',
            'tujuan_kegiatan'   => 'nullable|string|max:100',
            'sasaran_peserta'   => 'nullable|string|max:100',
            'jumlah_peserta'    => 'nullable|integer|min:1',
            'narasumber'        => 'nullable|string|max:100',
            'pj_kegiatan'       => 'required|string|max:100',
            'instansi'          => 'nullable|string|max:100',
            'alamat_instansi'   => 'nullable|string|max:100',
            'wilayah'           => 'nullable|string|max:100',
            'no_hp_pj'          => 'required|integer',
            'fasilitas_tambahan'=> 'nullable|string|max:100',
            'tgl_penggunaan'    => 'required|date',
            'jam_mulai'         => 'required',
            'jam_berakhir'      => 'required',
            'berkas_ktp'        => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:2048',
            'berkas_surat'      => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:2048',
            'berkas_poster'     => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:2048',
        ]);

        // Handle file uploads
        foreach (['berkas_ktp', 'berkas_surat', 'berkas_poster'] as $file) {
            if ($request->hasFile($file)) {
                $validated[$file] = $request->file($file)->store('peminjaman', 'public');
            }
        }

        Peminjaman::create(array_merge($validated, [
            'id_peminjaman' => 'PMJ-' . strtoupper(Str::random(8)),
            'status'        => false,
        ]));

        return redirect()->route('home')->with('success', 'Permohonan peminjaman ruangan berhasil dikirim! Kami akan menghubungi Anda segera.');
    }
}
