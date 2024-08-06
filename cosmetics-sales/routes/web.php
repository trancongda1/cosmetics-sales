<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('index');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/products', function () {
    return view('products');
});

Route::get('/client', function () {
    return view('client');
});

Route::get('/about', function () {
    return view('about');
});

// Đăng ký các route cho authentication
Auth::routes();

// Đăng ký route cho trang chủ
Route::get('/home', [HomeController::class, 'index'])->name('home');
