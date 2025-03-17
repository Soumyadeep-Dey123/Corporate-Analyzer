<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CompanyMaster;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function edit($id)
    {
        $company = CompanyMaster::findOrFail($id);
        return view('admin.sections.company.company-modal', compact('company'));
    }

    public function update(Request $request, $id)
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
}