<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UmkmController extends Controller
{
    public function index()
    {
        $umkms = \App\Models\Umkm::latest()->paginate(12);

        return view('pages.umkm', compact('umkms'));
    }
}
