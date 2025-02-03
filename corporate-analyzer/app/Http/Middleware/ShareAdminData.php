<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class ShareAdminData
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // Share the admin's name with all views if logged in
        if (Auth::guard('admin')->check()) {
            view()->share('adminName', Auth::guard('admin')->user()->admin_name);
        }

        return $next($request);
    }
}
