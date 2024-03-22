<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class showAllLanguageGamesController extends Controller
{
    public function index()
    {
        // Fetch all unique language codes dynamically
        $languages = DB::table('number_translations')
            ->select('language_code')
            ->distinct()
            ->pluck('language_code');

        $games = DB::table('number_translations')
            ->join('numbers', 'number_translations.numbers_id', '=', 'numbers.id')
            ->join('activities', 'numbers.activity_id', '=', 'activities.id')
            ->whereIn('number_translations.language_code', $languages) // Use the dynamically fetched languages
            ->select(
                'number_translations.language_code',
                'activities.name',
                'activities.objective',
                'activities.img'
            )
            ->distinct()
            ->get()
            ->groupBy('language_code');

        return view('games.all_language_game', compact('games'));
    }
}



