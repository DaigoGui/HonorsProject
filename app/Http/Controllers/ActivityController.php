<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;


class ActivityController extends Controller
{
    public function index()
    {
        $activities = Activity::all(); // Fetch all activities
        return view('games.all_games', compact('activities')); // Pass activities to the view
    }
}

