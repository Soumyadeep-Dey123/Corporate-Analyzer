<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CompanyUser;
use App\Models\CompanyMaster;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\Factory;

class CompanyUsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    //protected $model = CompanyUser::class;
    public function run(): void
    {
        // Make sure companies exist first
        if (CompanyMaster::count() === 0) {
            CompanyMaster::factory(5)->create();
        }

        // Create users for existing companies
        CompanyUser::factory()
            ->count(20)
            ->useExistingCompany()
            ->create();
    
        // Insert data into the 'company_users' table
        // DB::table('company_users')->insert([
        //     [
        //         'company_id' => 1,
        //         'users_name' => 'John Doe',
        //         'users_email' => 'john.doe@example.com',
        //         'users_phone' => '1234567890',
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        //     [
        //         'company_id' => 1,
        //         'users_name' => 'Jane Smith',
        //         'users_email' => 'jane.smith@example.com',
        //         'users_phone' => '0987654321',
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        // ]);
    }
}
