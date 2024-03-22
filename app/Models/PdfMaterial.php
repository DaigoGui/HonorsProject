<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PdfMaterial extends Model
{
    use HasFactory;

    protected $table = 'pdf_materials'; // Explicitly define the table if it doesn't follow Laravel's naming conventions
}

