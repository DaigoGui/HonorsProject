<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminPanelController extends Controller
{
    public function adminPanel()
    {
        // Logic for admin panel
        return view('admin_panel');
    }
}
