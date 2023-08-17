<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;

//resource - blog
Route::get('/', [BlogController::class, 'index']);
Route::get('/blogs/{blog:slug}', [BlogController::class, 'show']);
Route::get('/categories/{category:slug}', [BlogController::class, 'showCatBlogs']);
Route::get('/authors/{author:username}', [BlogController::class, 'showAuthorBlogs']);
Route::get('/contact-us', function () {
    return view('contacts.index');
});

Route::get('/about-us', function () {
    $name = "hlaing min than";
    return view('about', [
        'myname' => $name
    ]);
});
