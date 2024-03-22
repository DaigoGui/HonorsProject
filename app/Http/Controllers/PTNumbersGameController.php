<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class PTNumbersGameController extends Controller
{
    public function showNumbersGame()
    {
        $languageCode = 'pt-pt'; //  want pt-pt translations
    
        // Fetch numbers and their translations
        $numbers = \DB::table('numbers')
                    ->join('number_translations', 'numbers.id', '=', 'number_translations.numbers_id')
                    ->where('number_translations.language_code', $languageCode)
                    ->select('numbers.id', 'numbers.image_url', 'number_translations.word')
                    ->get();
    
        // Pass the numbers to the numbers view
        return view('games.numbers_pt', compact('numbers'));

    }
}
