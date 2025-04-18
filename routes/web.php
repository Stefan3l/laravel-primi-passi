<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', function () {

    $info = "testo di prova";

    return view('home', compact('info'));
})->name("home");

Route::get('/about', function () {
    return view('about');
})->name("about");

Route::get('/contact', function () {
    return view('contact');
})->name("contact");
