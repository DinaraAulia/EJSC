<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UmkmController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');

        $umkms = \App\Models\Umkm::when($search, function ($query, $search) {
                $query->where('name', 'like', "%{$search}%")
                      ->orWhere('city', 'like', "%{$search}%");
            })
            ->latest()
            ->paginate(12)
            ->withQueryString();

        return view('pages.umkm', compact('umkms', 'search'));
    }
}
