<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\AdminUser;


class AdminAuthController extends Controller
{
     // Show the login form
     public function showLoginForm()
     {
         return view('admin.login'); // This connects to resources/views/admin/login.blade.php
     }
 
     // Handle the login form submission
     public function login(Request $request)
     {
        //  $credentials = $request->only('admin_email', 'password');
        // Validate the incoming request
        $request->validate([
            'admin_email' => 'required|email',
            'password' => 'required|string',
        ]);
        // Attempt login with 'remember' functionality
        $credentials = $request->only('admin_email', 'password');
        $remember = $request->has('remember'); // Check if 'remember' is checked

         if (Auth::guard('admin')->attempt($credentials, $remember)) {
            return redirect()->route('admin.dashboard'); // Redirect to the dashboard
         }
         
         // Redirect back with an error message on failure
         return back()->withErrors(['error' => 'Invalid login credentials']);
     }
 
     // Logout admin
     public function logout(Request $request)
    {
        // Logout the admin user
        Auth::guard('admin')->logout();

        // Invalidate the session
        $request->session()->invalidate();

        // Regenerate CSRF token
        $request->session()->regenerateToken();

        // Redirect to the admin login page
        return redirect()->route('admin.login'); //->with('status', 'You have been logged out.');
    }
 
     // (Optional) Signup logic if needed
     public function showSignupForm()
     {
         return view('admin.signup');
     }
 
     public function signup(Request $request)
     {
        $request->validate([
            'admin_name' => 'required|string|max:255',
            'admin_email' => 'required|email|unique:admin_users',
            'admin_phone' => 'required|string|max:255',
            'password' => 'required|min:8|confirmed',
            'confirm' => 'accepted', // Ensures the checkbox is checked
        ]);
    
        // Create a new admin user
        AdminUser::create([
            'admin_name' => $request->admin_name,
            'admin_email' => $request->admin_email,
            'admin_phone' => $request->admin_phone,
            'password' => $request->password, // Automatically hashed via the mutator
        ]);
    
        return redirect()->route('admin.dashboard')->with('success', 'Signup successful!');
     }
}
