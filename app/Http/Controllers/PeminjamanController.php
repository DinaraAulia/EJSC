<?php

namespace App\Http\Controllers;

use App\Models\Ruangan;
use App\Models\Peminjaman;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

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
            'no_hp_pj'          => 'required|string',
            'fasilitas_tambahan'=> 'nullable|array',
            'tgl_penggunaan'    => 'required|date',
            'jam_mulai'         => 'required',
            'jam_berakhir'      => 'required',
            'berkas_ktp'        => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:10240',
            'berkas_surat'      => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:10240',
            'berkas_poster'     => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:10240',
        ]);

        // Normalize fasilitas into string for long description
        $facilitiesText = null;
        if (!empty($validated['fasilitas_tambahan'])) {
            $facilitiesText = is_array($validated['fasilitas_tambahan']) ? implode(', ', $validated['fasilitas_tambahan']) : (string) $validated['fasilitas_tambahan'];
        }

        // Handle file uploads
        $gambarPath = null;
        $ktpPath = null;
        $suratPath = null;
        if ($request->hasFile('berkas_poster')) {
            $gambarPath = $request->file('berkas_poster')->store('ruangan-images', 'public');
        }
        if ($request->hasFile('berkas_ktp')) {
            $ktpPath = $request->file('berkas_ktp')->store('peminjaman', 'public');
        }
        if ($request->hasFile('berkas_surat')) {
            $suratPath = $request->file('berkas_surat')->store('peminjaman', 'public');
        }

        // Build long description combining multiple form fields
        $longDescParts = [];
        if (!empty($validated['narasumber'])) $longDescParts[] = "Speaker: {$validated['narasumber']}";
        if (!empty($validated['pj_kegiatan'])) $longDescParts[] = "PIC: {$validated['pj_kegiatan']}";
        if (!empty($validated['instansi'])) $longDescParts[] = "Institution: {$validated['instansi']}";
        if (!empty($validated['alamat_instansi'])) $longDescParts[] = "Address: {$validated['alamat_instansi']}";
        if (!empty($validated['no_hp_pj'])) $longDescParts[] = "Contact: {$validated['no_hp_pj']}";
        if (!empty($facilitiesText)) $longDescParts[] = "Facilities: {$facilitiesText}";
        $deskripsiPanjang = $longDescParts ? implode("\n", $longDescParts) : null;

        // Ensure unique slug for the new Ruangan
        $namaRuangan = $validated['nama_kegiatan'] ?? 'Unnamed Room';
        $slugBase = Str::slug($namaRuangan) ?: 'ruangan';
        $slug = $slugBase;
        $counter = 1;
        while (Ruangan::where('slug', $slug)->exists()) {
            $slug = $slugBase . '-' . $counter++;
        }

        // Create Ruangan and Peminjaman inside a transaction so both are consistent
        DB::transaction(function () use ($validated, $namaRuangan, $slug, $deskripsiPanjang, $gambarPath, $ktpPath, $suratPath, $request) {
            $ruangan = Ruangan::create([
                'nama_ruangan'     => $namaRuangan,
                'slug'             => $slug,
                'deskripsi'        => $validated['tujuan_kegiatan'] ?? $validated['latar_belakang'] ?? null,
                'kapasitas'        => $validated['jumlah_peserta'] ?? null,
                'deskripsi_panjang'=> $deskripsiPanjang,
                'gambar'           => $gambarPath,
                'is_tersedia'      => false,
                'tgl_diperbarui'   => now(),
            ]);

            // Prepare fasilitas as short string (DB column length limited)
            $fasilitasShort = null;
            if (!empty($validated['fasilitas_tambahan'])) {
                $fasilitasShort = is_array($validated['fasilitas_tambahan']) ? implode(', ', $validated['fasilitas_tambahan']) : (string) $validated['fasilitas_tambahan'];
                if (strlen($fasilitasShort) > 100) {
                    $fasilitasShort = substr($fasilitasShort, 0, 97) . '...';
                }
            }

            Peminjaman::create([
                'id_peminjaman'     => 'PMJ-' . strtoupper(Str::random(8)),
                'ruangan_id'        => $ruangan->id_ruangan,
                'nama_kegiatan'     => $validated['nama_kegiatan'] ?? null,
                'latar_belakang'    => $validated['latar_belakang'] ?? null,
                'tujuan_kegiatan'   => $validated['tujuan_kegiatan'] ?? null,
                'sasaran_peserta'   => $validated['sasaran_peserta'] ?? null,
                'jumlah_peserta'    => $validated['jumlah_peserta'] ?? null,
                'narasumber'        => $validated['narasumber'] ?? null,
                'pj_kegiatan'       => $validated['pj_kegiatan'] ?? null,
                'instansi'          => $validated['instansi'] ?? null,
                'alamat_instansi'   => $validated['alamat_instansi'] ?? null,
                'wilayah'           => $validated['wilayah'] ?? null,
                'no_hp_pj'          => $validated['no_hp_pj'] ?? null,
                'fasilitas_tambahan'=> $fasilitasShort,
                'tgl_penggunaan'    => $validated['tgl_penggunaan'] ?? null,
                'jam_mulai'         => $validated['jam_mulai'] ?? null,
                'jam_berakhir'      => $validated['jam_berakhir'] ?? null,
                'berkas_ktp'        => $ktpPath,
                'berkas_surat'      => $suratPath,
                'berkas_poster'     => $gambarPath,
                'status'            => false,
            ]);
        });

        return redirect()->route('home')->with('success', 'Permohonan peminjaman ruangan berhasil dikirim! Kami akan menghubungi Anda segera.');
    }
}
