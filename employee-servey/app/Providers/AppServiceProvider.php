<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        // Share the admin's name globally if logged in
        View::composer('*', function ($view) {
            if (Auth::guard('admin')->check()) {
                $view->with('adminName', Auth::guard('admin')->user()->admin_name);
            }
        });
    }
}
