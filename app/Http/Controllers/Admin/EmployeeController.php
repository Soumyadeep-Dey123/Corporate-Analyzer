<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CompanyUser;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function edit($id)
    {
        $employee = CompanyUser::with('company')->findOrFail($id);
        return view('admin.employees.edit', compact('employee'));
    }

    public function update(Request $request, $id)
    {
        $employee = CompanyUser::findOrFail($id);

        $validated = $request->validate([
            'account_status' => 'required|in:1,2,3',
            'survey_status' => 'required|in:1,2,3',
        ]);

        $employee->update($validated);

        return redirect()->route('admin.employee-list')->with('success', 'Employee status updated!');
    }
}