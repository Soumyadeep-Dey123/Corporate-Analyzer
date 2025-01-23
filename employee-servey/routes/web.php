<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\AdminDashboardController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// admin route
// Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');

// Route::group(['prefix' => 'admin', 'middleware' => 'auth:admin'], function () {
//     // Define routes for authenticated admin users
//     Route::get('/', 'AdminController@dashboard')->name('admin.dashboard'); 
//     // ... other routes for authenticated admin actions
// });

// Route::get('/admin/login', 'AdminAuthController@showLoginForm')->name('admin.login');
// Route::post('/admin/login', 'AdminAuthController@login')->name('admin.login');
// Route::post('/admin/logout', 'AdminAuthController@logout')->name('admin.logout');

Route::prefix('admin')->group(function () {
    // Public routes
    Route::get('/', function () {
        return redirect()->route('admin.login');
    });
    Route::get('/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
    Route::post('/login', [AdminAuthController::class, 'login'])->name('admin.login.submit');
    Route::get('/signup', [AdminAuthController::class, 'showSignupForm'])->name('admin.signup');
    Route::post('/signup', [AdminAuthController::class, 'signup'])->name('admin.signup.submit');

    // Protected routes (require admin authentication)
    Route::middleware('admin')->group(function () {
        Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
        Route::get('/results', [AdminDashboardController::class, 'results'])->name('admin.results');
        Route::get('/welcome', [AdminDashboardController::class, 'welcome'])->name('admin.welcome');
        Route::post('/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');
    });
});