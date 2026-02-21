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
        $agendas   = Agenda::orderBy('tanggal')->get();
        $galeris   = Galeri::with('fotos')->latest()->take(8)->get();
        $partners  = Partner::all();
        $testimonis = Testimoni::where('is_published', true)->take(3)->get();

        return view('pages.home', compact(
            'agendas',
            'galeris',
            'partners',
            'testimonis'
        ));
    }
}
