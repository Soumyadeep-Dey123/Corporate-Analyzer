<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
// use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
     // Show the admin dashboard
     public function index()
     {
         // Pass the authenticated admin to the view
         return view('admin.dashboard' , ['adminName' => Auth::guard('admin')->user()->admin_name,]);
     }
 
     // Show results page
     public function results()
     {
         return view('admin.results'); // Matches results.blade.php
     }
 
     // Show welcome page
     public function welcome()
     {
         return view('admin.welcome'); // Matches welcome.blade.php
     }
}
