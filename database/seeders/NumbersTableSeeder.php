<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Number;

class NumbersTableSeeder extends Seeder
{
    public function run()
    {
        // Define image URLs for each number
        $numberImages = [
            0 => 'image_url_for_0',
            1 => 'image_url_for_1',
            2 => 'image_url_for_2',
            3 => 'image_url_for_3',
            4 => 'image_url_for_4',
            5 => 'image_url_for_5',
            6 => 'image_url_for_6',
            7 => 'image_url_for_7',
            8 => 'image_url_for_8',
            9 => 'image_url_for_9',
            10 => 'image_url_for_10',
            11 => 'image_url_for_11',
            12 => 'image_url_for_12',
            13 => 'image_url_for_13',
            14 => 'image_url_for_14',
            15 => 'image_url_for_15',
            16 => 'image_url_for_16',
            17 => 'image_url_for_17',
            18 => 'image_url_for_18',
            19 => 'image_url_for_19',
            20 => 'image_url_for_20'
        ];

        // Insert number values from 0 to 20 with corresponding image URLs
        foreach ($numberImages as $numberValue => $imageUrl) {
            Number::create([
                'number_value' => $numberValue,
                'image_url' => $imageUrl,
            ]);
        }
    }
}

