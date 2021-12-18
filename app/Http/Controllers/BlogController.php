<?php

namespace App\Http\Controllers;

use App\Models\Blog;

class BlogController extends Controller
{
    public function index()
    {
        return view('blogs', [
            'blogs'=>Blog::latest()
                        ->filter(request(['search','category','username']))
                        ->paginate(6)
                        ->withQueryString()
        ]);
    }
    
    public function show(Blog $blog)
    {
        return view('blog', [
            'blog'=>$blog,
            'randomBlogs'=>Blog::inRandomOrder()->take(3)->get()
        ]);
    }
}
