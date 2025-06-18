<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;
use App\Models\surveys;
use App\Http\Controllers\DemoSurveyController;


// Email Subscription 
use App\Http\Controllers\ConfirmSubscriptionController;
use App\Http\Controllers\UnsubscribeController;
use App\Livewire\SurveyForm;

Route::get('/', function () {
    return view('landing');
})->name('home');

// Route::get('/demo', function () {
//     $demoSurvey = surveys::first();
//     return view('demo-survey', compact('demoSurvey'));
// })->name('demo');


Route::get('/demo', [DemoSurveyController::class, 'show'])
     ->name('demo');


Route::view('dashboard', 'dashboard')
->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});


// Email Subscription Routes
Route::get('/subscribe/confirm/{token}', ConfirmSubscriptionController::class)
     ->name('subscriptions.confirm');

Route::get('/subscribe/unsubscribe/{token}', UnsubscribeController::class)
     ->name('subscriptions.unsubscribe');


require __DIR__.'/auth.php';