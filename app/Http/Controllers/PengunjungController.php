<?php

namespace App\Http\Controllers;

use App\Models\Pengunjung;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PengunjungController extends Controller
{
    public function create()
    {
        return view('pengunjung.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama'        => 'required|string|max:100',
            'usia'        => 'nullable|integer|min:1|max:120',
            'jenis_kelamin' => 'nullable|string|max:10',
            'no_hp'       => 'nullable|string|max:15',
            'sosmed'      => 'nullable|string|max:100',
            'profesi'     => 'nullable|string|max:100',
            'domisili'    => 'nullable|string|max:100',
            'sumber_info' => 'nullable|string|max:100',
            'keperluan'   => 'nullable|string|max:100',
        ]);

        Pengunjung::create(array_merge($validated, [
            'id_pengunjung' => 'PGJ-' . strtoupper(Str::random(8)),
            'created_at'    => now(),
        ]));

        return redirect()->route('home')->with('success', 'Terima kasih sudah mendaftar sebagai pengunjung!');
    }
}
