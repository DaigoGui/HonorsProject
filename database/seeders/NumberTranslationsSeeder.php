<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


use App\Models\NumberTranslation;

class NumberTranslationsSeeder extends Seeder
{
    public function run()
    {
        // Define translations for each number in English, Japanese, and Portuguese
        $translations = [
            ['number_id' => 1, 'language_code' => 'en', 'word' => 'one', 'word_jp' => 'いち', 'word_pt' => 'um'],
            ['number_id' => 2, 'language_code' => 'en', 'word' => 'two', 'word_jp' => 'に', 'word_pt' => 'dois'],
            ['number_id' => 3, 'language_code' => 'en', 'word' => 'three', 'word_jp' => 'さん', 'word_pt' => 'três'],
            ['number_id' => 4, 'language_code' => 'en', 'word' => 'four', 'word_jp' => 'よん', 'word_pt' => 'quatro'],
            ['number_id' => 5, 'language_code' => 'en', 'word' => 'five', 'word_jp' => 'ご', 'word_pt' => 'cinco'],
            ['number_id' => 6, 'language_code' => 'en', 'word' => 'six', 'word_jp' => 'ろく', 'word_pt' => 'seis'],
            ['number_id' => 7, 'language_code' => 'en', 'word' => 'seven', 'word_jp' => 'しち', 'word_pt' => 'sete'],
            ['number_id' => 8, 'language_code' => 'en', 'word' => 'eight', 'word_jp' => 'はち', 'word_pt' => 'oito'],
            ['number_id' => 9, 'language_code' => 'en', 'word' => 'nine', 'word_jp' => 'きゅう', 'word_pt' => 'nove'],
            ['number_id' => 10, 'language_code' => 'en', 'word' => 'ten', 'word_jp' => 'じゅう', 'word_pt' => 'dez'],
            ['number_id' => 11, 'language_code' => 'en', 'word' => 'eleven', 'word_jp' => 'じゅういち', 'word_pt' => 'onze'],
            ['number_id' => 12, 'language_code' => 'en', 'word' => 'twelve', 'word_jp' => 'じゅうに', 'word_pt' => 'doze'],
            ['number_id' => 13, 'language_code' => 'en', 'word' => 'thirteen', 'word_jp' => 'じゅうさん', 'word_pt' => 'treze'],
            ['number_id' => 14, 'language_code' => 'en', 'word' => 'fourteen', 'word_jp' => 'じゅうよん', 'word_pt' => 'catorze'],
            ['number_id' => 15, 'language_code' => 'en', 'word' => 'fifteen', 'word_jp' => 'じゅうご', 'word_pt' => 'quinze'],
            ['number_id' => 16, 'language_code' => 'en', 'word' => 'sixteen', 'word_jp' => 'じゅうろく', 'word_pt' => 'dezesseis'],
            ['number_id' => 17, 'language_code' => 'en', 'word' => 'seventeen', 'word_jp' => 'じゅうしち', 'word_pt' => 'dezessete'],
            ['number_id' => 18, 'language_code' => 'en', 'word' => 'eighteen', 'word_jp' => 'じゅうはち', 'word_pt' => 'dezoito'],
            ['number_id' => 19, 'language_code' => 'en', 'word' => 'nineteen', 'word_jp' => 'じゅうきゅう', 'word_pt' => 'dezenove'],
            ['number_id' => 20, 'language_code' => 'en', 'word' => 'twenty', 'word_jp' => 'にじゅう', 'word_pt' => 'vinte'],
        ];

        // Insert translations for numbers 0 to 20 in multiple languages
        foreach ($translations as $translation) {
            NumberTranslation::create($translation);
        }
    }
}
