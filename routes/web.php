<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\CompanyController;
use App\Http\Controllers\Admin\EmployeeController;
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
    return view('index');
});

Route::prefix('admin')->group(function () {
    // Public routes
    Route::get('/', function () {
        if (auth('admin')->check()) { // Check if admin is authenticated
            return redirect()->route('admin.dashboard'); // Redirect to dashboard
        }
        return redirect()->route('admin.login');
    });
    Route::get('/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
    Route::post('/login', [AdminAuthController::class, 'login'])->name('admin.login.submit');
    Route::get('/signup', [AdminAuthController::class, 'showSignupForm'])->name('admin.signup');
    Route::post('/signup', [AdminAuthController::class, 'signup'])->name('admin.signup.submit');
    Route::get('/terms', function () {
        return view('admin.terms');
    })->name('admin.terms');


    // Protected routes (require admin authentication)
    Route::middleware('admin')->group(function () {
        // Dashboard routes
        Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');

        // List views remain in AdminDashboardController
        Route::get('/employee-list', [AdminDashboardController::class, 'employeeList'])->name('admin.employee-list');
        Route::get('/company-list', [AdminDashboardController::class, 'companyList'])->name('admin.company-list');
        Route::get('/companies/{id}/status-update', [AdminDashboardController::class, 'statusUpdate'])->name('admin.companies.status-update');
        // Company routes using CompanyController
        Route::get('/companies/{id}/edit', [CompanyController::class, 'edit'])->name('admin.companies.edit');
        // Route::put('/companies/{id}', [CompanyController::class, 'update'])->name('admin.companies.update');
        
        // Employee routes using EmployeeController
        Route::get('/employees/{id}/edit', [EmployeeController::class, 'edit'])->name('admin.employees.edit');
        Route::put('/employees/{id}', [EmployeeController::class, 'update'])->name('admin.employees.update');

        Route::post('/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');
        // Add reports route
        Route::get('/report', [AdminDashboardController::class, 'showReport'])->name('admin.report');

        // Add question list route
        Route::get('/question-list', [AdminDashboardController::class, 'questionList'])->name('admin.question-list');
        Route::put('/companies/{id}', [AdminDashboardController::class, 'updateCompany'])->name('admin.companies.update');

    });
});

#company_logo add