<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\SubscribeController;
use App\Http\Middleware\AuthMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/', [BlogController::class, 'index']);
Route::get('/blogs/{blog:slug}', [BlogController::class, 'show']);

Route::middleware(AuthMiddleware::class)->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::post('/blogs/{blog:slug}/comments', [CommentController::class, 'store']);
    Route::post('/blogs/{blog:slug}/toggle-subscribe', [SubscribeController::class, 'toggle'])->name('blogs.toggle');
});

Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'login']);
    Route::post('/login', [AuthController::class, 'loginStore']);
    Route::get('/register', [AuthController::class, 'create']);
    Route::post('/register', [AuthController::class, 'store']);
});




Route::get('/contact-us', function () {
    return view('contacts.index');
});

Route::get('/about-us', function () {
    $name = "hlaing min than";
    return view('about', [
        'myname' => $name
    ]);
});
