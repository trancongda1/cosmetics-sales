<?php

use Illuminate\Support\Facades\Route;

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

