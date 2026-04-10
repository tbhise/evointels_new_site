<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/services', function () {
    return view('services');
});
Route::get('/reports/{industry?}', function () {
    return view('reports');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/blogs', function () {
    return view('blog');
});
Route::get('/about', function () {
    return view('about');
});
