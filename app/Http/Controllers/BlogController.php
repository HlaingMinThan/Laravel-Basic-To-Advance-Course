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
                ->search(request('query'))
                ->get(),
            'categories' => Category::all()
        ]);
    }
    public function showCatBlogs(Category $category)
    {
        return view('blogs.index', [
            'blogs' => $category->posts->load('category'),

        ]);
    }

    public function show(Blog $blog)
    {
        return view('blogs.show', [
            'blog' => $blog,
            'randomBlogs' => Blog::inRandomOrder()->take(3)->get()
        ]);
    }

    public function showAuthorBlogs(User $author)
    {
        return view('blogs.index', [
            'blogs' => $author->blogs->load('category', 'author')
        ]);
    }
}
