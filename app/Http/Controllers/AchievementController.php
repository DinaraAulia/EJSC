<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AchievementController extends Controller
{
    public function index(Request $request)
    {
        $query = \App\Models\Achievement::orderBy('year', 'desc');

        if ($request->has('category')) {
            $cat = $request->get('category');
            if ($cat === 'provincial') {
                $query->where('category', 'LIKE', 'Provinsi%');
            } elseif ($cat === 'national') {
                $query->where('category', 'NOT LIKE', 'Provinsi%');
            }
        }

        $achievements = $query->get();

        return view('pages.achievement', compact('achievements'));
    }
}
