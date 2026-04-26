<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TalentaController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');

        $talentas = \App\Models\Talenta::when($search, function ($query, $search) {
                $query->where('name', 'like', "%{$search}%")
                      ->orWhere('city', 'like', "%{$search}%")
                      ->orWhere('skill', 'like', "%{$search}%");
            })
            ->latest()
            ->paginate(12)
            ->withQueryString();

        return view('pages.talenta', compact('talentas', 'search'));
    }
}
