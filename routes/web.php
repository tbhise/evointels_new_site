<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReportController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);



Route::get('/reports/{industry?}', [ReportController::class, 'index']);

Route::get('/fetchReports', [ReportController::class, 'fetchReports']);

Route::get('/services', function () {
    return view('services');
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
