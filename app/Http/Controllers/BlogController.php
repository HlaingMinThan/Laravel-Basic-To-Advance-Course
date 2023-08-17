<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return view('blogs.index', [
            'blogs' => Blog::with(['category', 'author'])
                ->latest()
                ->filter(request(['search', 'category', 'author']))
                ->paginate(6),
        ]);
    }

    public function show(Blog $blog)
    {
        return view('blogs.show', [
            'blog' => $blog,
            'randomBlogs' => Blog::inRandomOrder()->take(3)->get()
        ]);
    }
}
