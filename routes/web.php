<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController; 
use App\Http\Controllers\AuthController;

// for home pages
Route::get('/', function () {
    return view('pages.home');
});

// for about pages
Route::get('/about', function () {
    return view('pages.about'); 
});

Route::get('/home', function () {
    return view('pages.home');
});

// for about pages
Route::get('/about', function () {
    return view('pages.about'); 
});

// for contact pages
Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

// for terms pages
Route::get('/terms', function () {
    return view('pages.terms'); 
});

// for privacy policy pages
Route::get('/privacy', function () {
    return view('pages.privacy'); 
});

// for dashboard pages
Route::get('/dash', function () {
    return view('pages.dashboard'); 
})->middleware('auth');


// for admin pages
Route::get('/admin', function () {
    return view('pages.admin'); 
})->middleware('auth');

// for leads pages
Route::get('/leads', function () {
    return view('pages.leads'); 
})->middleware('auth');

// for sales pages
Route::get('/sales', function () {
    return view('pages.sales'); 
})->middleware('auth');

// for Clients & Contacts pages
Route::get('/client', function () {
    return view('pages.client'); 
})->middleware('auth');

// for Tasks & Activities pages
Route::get('/tasks', function () {
    return view('pages.tasks'); 
})->middleware('auth');

// Authentication routes
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Password reset routes
Route::get('/forgot-password', [AuthController::class, 'showForgotPasswordForm'])->name('password.request');
Route::post('/forgot-password', [AuthController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('/reset-password/{token}', [AuthController::class, 'showResetPasswordForm'])->name('password.reset');
Route::post('/reset-password', [AuthController::class, 'resetPassword'])->name('password.update');

?>