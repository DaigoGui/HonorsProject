<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NumberTranslation extends Model
{
    protected $table = 'number_translations';
    protected $fillable = ['numbers_id', 'language_code', 'word'];
    public $timestamps = true; // Assuming you have timestamps; if not, set to false.
}
