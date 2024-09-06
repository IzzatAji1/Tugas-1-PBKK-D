<?php

use Illuminate\Support\Facades\Route;


Route::get('/about', function () {
    return view('about', ['name' => 'Izzat Aji', 'title' => 'About']);
});

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/blog', function () {
    return view('blog', ['title' => 'Blog' ]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact'] );
});