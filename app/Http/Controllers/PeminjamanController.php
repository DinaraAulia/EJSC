<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use App\Models\Ruangan;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    public function create()
    {
        $ruangans = Ruangan::where('is_tersedia', true)->get();
        return view('peminjaman.create', compact('ruangans'));
    }

    /**
     * AJAX: Check if the room is already booked in the given time range.
     */
    public function check(Request $request)
    {
        $request->validate([
            'ruangan_id'    => 'required|string',
            'tgl_penggunaan'=> 'required|date',
            'tgl_berakhir'  => 'required|date|after_or_equal:tgl_penggunaan',
            'jam_mulai'     => 'required',
            'jam_berakhir'  => 'required',
        ]);

        $conflict = Peminjaman::where('ruangan_id', $request->ruangan_id)
            ->where('status', '!=', 'rejected')
            ->where(function ($q) use ($request) {
                // Date ranges overlap
                $q->where('tgl_penggunaan', '<=', $request->tgl_berakhir)
                  ->where('tgl_berakhir', '>=', $request->tgl_penggunaan);
            })
            ->where(function ($q) use ($request) {
                // Time ranges overlap
                $q->where('jam_mulai', '<', $request->jam_berakhir)
                  ->where('jam_berakhir', '>', $request->jam_mulai);
            })
            ->exists();

        if ($conflict) {
            $ruangan = Ruangan::find($request->ruangan_id);
            return response()->json([
                'conflict' => true,
                'message' => 'The ' . ($ruangan->nama_ruangan ?? 'selected room') . ' is already booked on the selected date and time. Please choose a different schedule.',
            ]);
        }

        return response()->json(['conflict' => false]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'kategori_instansi' => 'required|string|max:100',
            'instansi'          => 'required|string|max:100',
            'alamat_instansi'   => 'required|string|max:255',
            'nama_kegiatan'     => 'required|string|max:100',
            'jumlah_peserta'    => 'required|integer|min:1',
            'ruangan_id'        => 'required|string|exists:ruangans,id_ruangan',
            'tgl_penggunaan'    => 'required|date',
            'tgl_berakhir'      => 'required|date|after_or_equal:tgl_penggunaan',
            'jam_mulai'         => 'required',
            'jam_berakhir'      => 'required',
            'pj_kegiatan'       => 'required|string|max:100',
            'no_hp_pj'          => 'required|string',
            'berkas_surat'      => 'required|file|mimes:jpg,jpeg,png,pdf|max:10240',
            'bersedia_ubah_jadwal' => 'required|accepted',
        ]);

        // Double-check for conflict (server-side safety)
        $conflict = Peminjaman::where('ruangan_id', $validated['ruangan_id'])
            ->where('status', '!=', 'rejected')
            ->where(function ($q) use ($validated) {
                $q->where('tgl_penggunaan', '<=', $validated['tgl_berakhir'])
                  ->where('tgl_berakhir', '>=', $validated['tgl_penggunaan']);
            })
            ->where(function ($q) use ($validated) {
                $q->where('jam_mulai', '<', $validated['jam_berakhir'])
                  ->where('jam_berakhir', '>', $validated['jam_mulai']);
            })
            ->exists();

        if ($conflict) {
            return back()->withInput()->withErrors([
                'tgl_penggunaan' => 'This room is already booked on the selected dates and times. Please choose a different schedule.',
            ]);
        }

        $suratPath = null;
        if ($request->hasFile('berkas_surat')) {
            $suratPath = $request->file('berkas_surat')->store('peminjaman', 'public');
        }

        Peminjaman::create([
            'kategori_instansi'    => $validated['kategori_instansi'],
            'ruangan_id'           => $validated['ruangan_id'],
            'instansi'             => $validated['instansi'],
            'alamat_instansi'      => $validated['alamat_instansi'],
            'nama_kegiatan'        => $validated['nama_kegiatan'],
            'jumlah_peserta'       => $validated['jumlah_peserta'],
            'pj_kegiatan'          => $validated['pj_kegiatan'],
            'no_hp_pj'             => $validated['no_hp_pj'],
            'tgl_penggunaan'       => $validated['tgl_penggunaan'],
            'tgl_berakhir'         => $validated['tgl_berakhir'],
            'jam_mulai'            => $validated['jam_mulai'],
            'jam_berakhir'         => $validated['jam_berakhir'],
            'berkas_surat'         => $suratPath,
            'bersedia_ubah_jadwal' => true,
            'status'               => 'pending',
        ]);

        // Redirect to the workspace page the booking was for
        $ruangan = Ruangan::find($validated['ruangan_id']);
        $redirectRoute = $ruangan && $ruangan->slug
            ? route('workspace.show', $ruangan->slug)
            : route('home');

        return redirect($redirectRoute)->with('success', 'Your room booking request has been submitted! Please confirm to the Bakorwil III Malang Contact Person no later than H+1.');
    }
}
