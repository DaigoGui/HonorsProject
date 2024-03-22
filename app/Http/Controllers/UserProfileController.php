<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post; // Make sure this uses your actual Post model

class UserProfileController extends Controller
{
    public function index()
    {
        // Assume you have a User model and each User has many Posts
        // This will fetch the posts for the currently authenticated user
        $userPosts = auth()->user()->posts;

        // Pass the posts to the profile panel view
        return view('profile.profile_panel', ['userPosts' => $userPosts]);
    }
}