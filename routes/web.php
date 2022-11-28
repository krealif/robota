<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Cms\ClientController;
use App\Http\Controllers\Cms\FeatureController;
use App\Http\Controllers\Cms\PricingController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

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
Route::controller(LoginController::class)->group(function () {
    Route::get('/cms/login', 'showLoginForm')->name('cms.login');
    Route::post('/cms/login', 'login');
    Route::post('/cms/logout', 'logout')->name('cms.logout');
});

// Route::controller(RegisterController::class)->group(function () {
//     Route::get('/cms/register', 'showRegistrationForm')->name('cms.register');
//     Route::post('/cms/register', 'register');
// });

// Upload
Route::controller(UploadController::class)->group(function () {
    Route::post('/upload', 'store');
    Route::delete('/upload', 'destroy');
});

// Dashboard
Route::get('/cms', function () {
    return view('cms.home');
})->middleware('auth');

Route::resource('/cms/client', ClientController::class);
Route::resource('/cms/feature', FeatureController::class);
Route::resource('/cms/pricing', PricingController::class);
