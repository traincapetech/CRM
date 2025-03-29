<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController; // Make sure to import UserController if you're using it.

Route::get('/dash', function () {
    return view('dashboard');
})->name('dashboard');

// for home pages
Route::get('/home', function () {
    return view('pages.home');
});

// for about pages
Route::get('/about', function () {
    return view('pages.about'); 
});

// for about pages
Route::get('/about', function () {
    return view('pages.about'); 
});

// for contact pages
Route::get('/contact', function () {
    return view('pages.contact'); 
});

// for terms pages
Route::get('/terms', function () {
    return view('pages.terms'); 
});

// for privacy policy pages
Route::get('/privacy', function () {
    return view('pages.privacy'); 
});

// for dashboard pages
// Route::get('/dash', function () {
//     return view('dashboard'); 
// });


// for admin pages
Route::get('/admin', function () {
    return view('pages.admin'); 
});

// for leads pages
Route::get('/leads', function () {
    return view('pages.leads'); 
});

// for sales pages
Route::get('/sales', function () {
    return view('pages.sales'); 
});

// for Clients & Contacts pages
Route::get('/client', function () {
    return view('pages.client'); 
});

// for Tasks & Activities pages
Route::get('/tasks', function () {
    return view('pages.tasks'); 
});



use App\Http\Controllers\DashboardController;

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
Route::get('/', function () {
    return redirect('/home');
});


?>