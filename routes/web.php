<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;

//resource - blog
Route::get('/', [BlogController::class, 'index']);
Route::get('/blogs/{blog:slug}', [BlogController::class, 'show']);
Route::get('/register', [AuthController::class, 'create']);
Route::post('/register', [AuthController::class, 'store']);




Route::get('/contact-us', function () {
    return view('contacts.index');
});

Route::get('/about-us', function () {
    $name = "hlaing min than";
    return view('about', [
        'myname' => $name
    ]);
});
