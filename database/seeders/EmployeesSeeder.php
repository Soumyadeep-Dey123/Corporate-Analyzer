<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Employees as Employee; // Ensure the correct model is imported
use App\Models\Companies as Company; // Ensure the correct model is imported

class EmployeesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $perCompany = 15;         // 🔧 change as needed

        Company::all()->each(function ($company) use ($perCompany) {  // efficient chunk iteration :contentReference[oaicite:7]{index=7}
            Employee::factory()
                ->count($perCompany)
                ->state(['company_id' => $company->id])               // factory “state” helper :contentReference[oaicite:8]{index=8}
                ->create();
        });
    }
}