<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\PageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Landing Page 
Route::controller(PageController::class)->group(function () {
    Route::get('/', 'home');
    Route::get('/about', 'about');
    Route::get('/contact', 'contact');
    Route::get('/login', 'login');
});

// CMS Auth
Route::get('/cms/login', [LoginController::class, 'showLoginForm'])->name('cms.login');
Route::post('/cms/login', [LoginController::class, 'login']);
Route::post('/cms/logout', [LoginController::class, 'logout'])->name('cms.logout');
// Route::get('/cms/register', [RegisterController::class, 'showRegistrationForm'])->name('cms.register');
// Route::post('/cms/register', [RegisterController::class, 'register']);


// Dashboard
Route::get('/cms', function () {
    return view('cms.home');
})->middleware('auth');

Route::resource('/cms/client', ClientController::class);
Route::resource('/cms/feature', FeatureController::class);
