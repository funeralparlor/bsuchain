<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

// Landing Page
Route::get('/', function () {
    return view('landing');
})->name('home');

// List Page
Route::get('/list', function () {
    return view('list');
})->name('list');

// Search Page
Route::get('/search', function () {
    return view('search');
})->name('search');

// reports Page
Route::get('/reports', function () {
    return view('reports');
})->name('reports');

// About Page
Route::get('/about', function () {
    return view('about');
})->name('about');

// Contact Page
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

//Authentication routes
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');

Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

//Dashboard Routes

// Dashboard Routes
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/profile', function () {
        return view('profile');
    })->name('profile');

    Route::get('/settings', function () {
        return view('settings');
    })->name('settings');
});


