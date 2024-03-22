<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PdfMaterial; // Import the PdfMaterial model

class PdfMaterialController extends Controller
{
    public function index()
    {
        $pdfMaterials = PdfMaterial::all(); // Retrieve all PDF materials from the database

        return view('materials.materials', ['pdfMaterials' => $pdfMaterials]); // Pass them to the view
    }
}

