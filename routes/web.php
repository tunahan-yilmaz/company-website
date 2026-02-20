<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Site Routes
|--------------------------------------------------------------------------
*/

// Home Page
Route::get('/', function () {
    return view('site.pages.index');
})->name('site.home');

// About Page
Route::get('/hakkimizda', function () {
    return view('site.pages.about');
})->name('site.about');

// Services Page
Route::get('/hizmetlerimiz', function () {
    return view('site.pages.services');
})->name('site.services');

// Portfolio Pages
Route::get('/portfolyo', function () {
    return view('site.pages.portfolio');
})->name('site.portfolio');

Route::get('/portfolyo/{slug}', function ($slug) {
    return view('site.pages.portfolio-detail', ['slug' => $slug]);
})->name('site.portfolio.detail');

// References Page
Route::get('/referanslar', function () {
    return view('site.pages.references');
})->name('site.references');

// Blog Pages
Route::get('/blog', function () {
    return view('site.pages.blog');
})->name('site.blog');

Route::get('/blog/detail', function () {
    return view('site.pages.blog-detail');
})->name('site.blog.detail');

// Contact Page
Route::get('/iletisim', function () {
    return view('site.pages.contact');
})->name('site.contact');
