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
     
     // (Optional) Signup logic if needed
     public function showSignupForm()
     {
         return view('admin.signup');
        }
 
        public function signup(Request $request)
        {
            // Validate incoming request
            $validatedData = $request->validate([
                'admin_name' => 'required|string|max:255',
                'admin_email' => 'required|email|unique:admin_users',
                'admin_phone' => 'required|string|max:255',
                'password' => 'required|min:8|confirmed',
                'confirm' => 'accepted', // Ensures the checkbox is checked
            ]);

            // Check if admin credentials already exist
            $existingAdmin = AdminUser::where('admin_email', $request->admin_email)
                                    ->orWhere('admin_phone', $request->admin_phone)
                                    ->first();

            if ($existingAdmin) {
                return redirect()->back()->withErrors(['error' => 'Email or Phone number already in use.']);
            }

            // Create a new admin user
            try {
                $admin = AdminUser::create([
                    'admin_name' => $validatedData['admin_name'],
                    'admin_email' => $validatedData['admin_email'],
                    'admin_phone' => $validatedData['admin_phone'],
                    'password' => bcrypt($validatedData['password']), // Ensure password is hashed
                ]);

                // **Log in the admin after signup**
                Auth::guard('admin')->login($admin);

                // Redirect to dashboard
                return redirect()->route('admin.dashboard')->with('success', 'Signup successful!');
            } catch (\Exception $e) {
                return redirect()->back()->withErrors(['error' => 'Something went wrong. Please try again.']);
            }
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
}
