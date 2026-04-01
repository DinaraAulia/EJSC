<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TalentaController extends Controller
{
    public function index()
    {
        $talentas = \App\Models\Talenta::latest()->paginate(12);

        return view('pages.talenta', compact('talentas'));
    }
}
