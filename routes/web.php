<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;
use App\Models\Blog;
use App\Models\Category;
use App\Models\User;

Route::get('/', [BlogController::class,'index']);
Route::get('/blogs/{blog:slug}', [BlogController::class,'show']);

Route::get('/users/{user:username}', function (User $user) {
    return view('blogs', [
        'blogs'=>$user->blogs,
        'categories'=>Category::all()
    ]);
});
