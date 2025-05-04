<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\CompanyUser;
use App\Models\CompanyMaster;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
// use App\Http\Controllers\Admin\CompanyController;

class AdminDashboardController extends Controller
{
    // !=========================================|DASHBOARD ROUTES|==========================================!
    // Show the admin dashboard
    public function index()
    {
        // Pass the authenticated admin to the view
        return view('admin.dashboard', ['adminName' => Auth::guard('admin')->user()->admin_name,]);
    }

    // Show the company list
    public function companyList()
    {
        $companies = CompanyMaster::all();
        return view('admin.company-list', compact('companies'));
    }

    // Show the employee list
    public function employeeList()
    {
        $employees = CompanyUser::with('company')->get();
        $companies = CompanyMaster::all("id", "company_name");
        return view('admin.employee-list', compact('employees', 'companies'));
    }

    // Show the report page
    public function showReport()
    {
        return view('admin.report');
    }

    // Show the question list
    public function questionList()
    {
        return view('admin.question-list');
    }


    // !=========================================|COMPANY ROUTES|==========================================!
    // Company status update 
    public function companyStatusUpdate($id)
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

    // Company details update 
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

    // Store company details
    public function storeCompany(Request $request)
    {
        echo "<pre>";
        print_r($request->all());
        // exit;
        $validated = $request->validate([
            'company_name' => 'required|string|max:255',
            'company_email' => 'required|email|max:255|unique:company_masters,company_email',
            'company_phone' => 'required|string|max:20',
            'company_address' => 'required|string|max:500',
            'status' => 'required|in:0,1',
        ]);

        if (CompanyMaster::create($request->all())) {
            echo "Company added successfully!";
        }
        // exit;

        return redirect()->route('admin.company-list')->with('success', 'Company added successfully!');
    }

    // !=========================================|EMPLOYEE ROUTES|==========================================!

    // Store employee details
    public function storeEmployee(Request $request)
    {
        $validated = $request->validate([
            'company_id'     => 'required|exists:company_masters,id',
            'users_name'     => 'required|string|max:255',
            'users_email'    => 'required|email|max:191|unique:company_users,users_email',
            'users_phone'    => 'required|string|max:255',
            'account_status' => 'required|in:1,2,3',
            'survey_status'  => 'required|in:1,2,3',
        ]);

        if (CompanyUser::create($validated)) {
            return redirect()->route('admin.employee-list')->with('success', 'Employee added successfully!');
        }

        return back()->with('error', 'Failed to add employee.');
    }
    // Employee status update
    public function employeeStatusUpdate(Request $request)
    {
        $request->validate([
            'employee_id' => 'required|exists:company_users,id',
            'account_status' => 'required|in:1,2,3',
        ]);

        try {
            $employee = CompanyUser::findOrFail($request->employee_id);
            $employee->account_status = $request->account_status;
            $employee->save();

            return response()->json(['success' => true, 'message' => 'Status updated successfully']);
        } catch (\Illuminate\Validation\ValidationException $e) {
            return response()->json(['success' => false, 'message' => $e->errors()], 422);
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return response()->json(['success' => false, 'message' => 'Employee not found'], 404);
        } catch (\Exception $e) {
            \Log::error('Status update error: ' . $e->getMessage());
            return response()->json(['success' => false, 'message' => 'Server error: ' . $e->getMessage()], 500);
        }
    }
    public function employeeSurveyStatusUpdate(Request $request)
{
    $request->validate([
        'employee_id' => 'required|exists:company_users,id',
        'survey_status' => 'required|in:1,2,3',
    ]);

    try {
        $employee = CompanyUser::findOrFail($request->employee_id);
        $employee->survey_status = $request->survey_status;
        $employee->save();

        return response()->json(['success' => true, 'message' => 'Survey status updated successfully']);
    } catch (\Illuminate\Validation\ValidationException $e) {
        return response()->json(['success' => false, 'message' => $e->errors()], 422);
    } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
        return response()->json(['success' => false, 'message' => 'Employee not found'], 404);
    } catch (\Exception $e) {
        \Log::error('Survey status update error: ' . $e->getMessage());
        return response()->json(['success' => false, 'message' => 'Server error: ' . $e->getMessage()], 500);
    }
}
}
