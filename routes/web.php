<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $info = "testo di prova";

    return view('home', compact('info'));
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});
