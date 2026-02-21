<?php

namespace App\Http\Controllers;

use App\Models\Fasilitas;
use Illuminate\Http\Request;

class FasilitasController extends Controller
{
    public function index()
    {
        $fasilitas = Fasilitas::where('is_tersedia', true)->get();
        return view('fasilitas.index', compact('fasilitas'));
    }
}
