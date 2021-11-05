<?php

use Illuminate\Support\Facades\Route;
use App\Models\Blog;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('blogs', [
        'blogs'=>Blog::all()
    ]);
});

Route::get('/blogs/{blog:slug}', function (Blog $blog) {
    return view('blog', [
        'blog'=>$blog
    ]);
})->where('blog', '[A-z\d\-_]+');
