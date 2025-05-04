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
    // Show Login Form
    Route::get('/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
    // Handle Login Form Submission
    Route::post('/login', [AdminAuthController::class, 'login'])->name('admin.login.submit');
    // Show Signup Form
    Route::get('/signup', [AdminAuthController::class, 'showSignupForm'])->name('admin.signup');
    // Handle Signup Form Submission
    Route::post('/signup-submit', [AdminAuthController::class, 'signup'])->name('admin.signup.submit');
    // Show Terms of Service
    Route::get('/terms', function () {
        return view('admin.terms');
    })->name('admin.terms');


    // Protected routes (require admin authentication)
    Route::middleware('admin')->group(function () {

        // ==================|DASHBOARD ROUTES|==================
        Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');

        // List Views
        Route::get('/employee-list', [AdminDashboardController::class, 'employeeList'])->name('admin.employee-list');
        Route::get('/company-list', [AdminDashboardController::class, 'companyList'])->name('admin.company-list');
        Route::get('/question-list', [AdminDashboardController::class, 'questionList'])->name('admin.question-list');
        Route::get('/report', [AdminDashboardController::class, 'showReport'])->name('admin.report');


        // ==================|COMPANY ROUTES|==================
        // CompanyStatus Update
        Route::get('/companies/{id}/status-update', [AdminDashboardController::class, 'companyStatusUpdate'])->name('admin.companies.status-update');
        // Company Details Update
        Route::put('/companies/{id}', [AdminDashboardController::class, 'updateCompany'])->name('admin.companies.update');
        // Company Add
        Route::post('/companies-store', [AdminDashboardController::class, 'storeCompany'])->name('admin.companies.store');

        // Company routes using CompanyController
        // Route::get('/companies/{id}/edit', [CompanyController::class, 'edit'])->name('admin.companies.edit');
        // Route::put('/companies/{id}', [CompanyController::class, 'update'])->name('admin.companies.update');


        // ==================|EMPLOYEE ROUTES|==================

        // Employee Add
        Route::post('/employee-store', [AdminDashboardController::class, 'storeEmployee'])->name('admin.employee.store');

        // EmployeeStatus Update
        Route::post('/employees/status-update', [AdminDashboardController::class, 'employeeStatusUpdate'])->name('admin.employees.status-update');
        Route::post('/employees/survey-status-update', [AdminDashboardController::class, 'employeeSurveyStatusUpdate'])->name('admin.employees.survey-status-update');

        // Employee routes using EmployeeController
        Route::get('/employees/{id}/edit', [EmployeeController::class, 'edit'])->name('admin.employees.edit');
        Route::put('/employees/{id}', [EmployeeController::class, 'update'])->name('admin.employees.update');



        // ==================LOGOUT==================
        Route::post('/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');
    });
});

// company_logo add