<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlogPost;

class BlogPostsController extends Controller
{
    public function index()
    {
        // Retrieve all blog posts
        $blogPosts = BlogPost::all();
    
        // Pass blog posts to the view
        return view('blog.all_blogs', ['blogPosts' => $blogPosts]);

    }
}
