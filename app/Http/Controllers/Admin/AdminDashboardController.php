<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\CompanyUser;
use App\Models\CompanyMaster;
use Illuminate\Http\Request;
// use App\Http\Controllers\Admin\CompanyController;

class AdminDashboardController extends Controller
{
     // Show the admin dashboard
     public function index()
     {
         // Pass the authenticated admin to the view
         return view('admin.dashboard' , ['adminName' => Auth::guard('admin')->user()->admin_name,]);
     }
 
     public function employeeList()
    {
        $employees = CompanyUser::with('company')->get();
        $companies = CompanyMaster::all("id","company_name");
        return view('admin.employee-list', compact('employees', 'companies'));
    }

    public function companyList()
    {
        $companies = CompanyMaster::all();
        return view('admin.company-list', compact('companies'));
    }

     public function showReport()
    {
        return view('admin.report');
    }

    public function questionList()
    {
        return view('admin.question-list');
    }

    public function statusUpdate($id)
    {
        $company = CompanyMaster::findOrFail($id);

        // Perform whatever status update you need
        $company->status = $company->status === 1 
            ? 0  // Toggle from Active to Blocked
            : 1; // or some logic
        $company->save();

        // Redirect back or somewhere else
        return redirect()->route('admin.company-list')->with('success', 'Status updated!');
    }

    public function updateCompany(Request $request, $id)
    {
        $company = CompanyMaster::findOrFail($id);

        $validated = $request->validate([
            'company_name' => 'required|string|max:255',
            'company_email' => 'required|email|max:255',
            'company_phone' => 'required|string|max:20',
            'company_address' => 'required|string|max:255',
        ]);

        $company->update($validated);

        return redirect()->route('admin.company-list')->with('success', 'Company updated successfully!');
    }
    public function storeCompany(Request $request)
    {
        $validated = $request->validate([
            'company_name' => 'required|string|max:255',
            'company_email' => 'required|email|max:255|unique:company_masters,company_email',
            'company_phone' => 'required|string|max:20',
            'company_address' => 'required|string|max:500',
            'status' => 'required|in:active,inactive',
        ]);

        CompanyMaster::create($validated);

        return redirect()->route('admin.company-list')->with('success', 'Company added successfully!');
    }


}

