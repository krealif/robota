<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Landing Page 

Route::get('/', function () {
    return view('page.home');
});

Route::get('/about', function () {
    return view('page.about');
});

Route::get('/contact', function () {
    return view('page.contact');
});

Route::get('/login', function () {
    return view('page.login');
});

// CMS Auth
Route::get('/cms/login', [LoginController::class, 'showLoginForm'])->name('cms.login');
Route::post('/cms/login', [LoginController::class, 'login']);
Route::post('/cms/logout', [LoginController::class, 'logout'])->name('cms.logout');
Route::get('/cms/register', [RegisterController::class, 'showRegistrationForm'])->name('cms.register');
Route::post('/cms/register', [RegisterController::class, 'register']);


// CMS
Route::get('/cms', [DashboardController::class, 'index']);
