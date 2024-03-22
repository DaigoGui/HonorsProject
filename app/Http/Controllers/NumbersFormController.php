<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NumberTranslation;
use Illuminate\Support\Facades\DB;

class NumbersFormController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'language_code' => 'required|string|max:10',
            'words.*' => 'required|string|max:50',
        ]);

        DB::transaction(function () use ($request) {
            foreach ($request->words as $index => $word) {
                // Since numbers start from 0 and numbers_id starts from 1, add 1 to index.
                $numbers_id = $index + 1;

                NumberTranslation::create([
                    'numbers_id' => $numbers_id,
                    'language_code' => $request->language_code,
                    'word' => $word,
                ]);
            }
        });

        return redirect()->route('show_numbers_form')->with('success', 'Translations added successfully!');
    }
}


