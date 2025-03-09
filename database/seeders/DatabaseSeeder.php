<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            AdminSeeder::class,        // Static data
            QuestionsTableSeeder::class,         // Static data
            CompanyMasterSeeder::class,    // Random data via factory
            CompanyUsersTableSeeder::class,      // Random data via factory
            UserResponsesTableSeeder::class,      // Random data via factory
        ]);



        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Seed company_masters table
        // DB::table('company_masters')->insert([
        //     [
        //         'company_name' => 'Tech Innovators',
        //         'company_address' => '123 Tech Street',
        //         'company_email' => 'info@tech.com',
        //         'company_phone' => '1234567890',
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        //     [
        //         'company_name' => 'Future Solutions',
        //         'company_address' => '456 Innovation Blvd',
        //         'company_email' => 'contact@future.com',
        //         'company_phone' => '9876543210',
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        // ]);

        // Seed admin_users table
        // DB::table('admin_users')->insert([
        //     [
        //         'admin_name' => 'Admin One', 
        //         'admin_email' => 'admin1@company.com', 
        //         'admin_phone' => '3333333333',
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        //     [
        //         'admin_name' => 'Admin Two', 
        //         'admin_email' => 'admin2@company.com', 
        //         'admin_phone' => '4444444444',
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        // ]);

        // Insert data into the 'user_responses' table
        // DB::table('user_responses')->insert([
        //     [
        //         'question_id' => 1,
        //         'company_users_id' => 1,
        //         'value' => '2',
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        //     [
        //         'question_id' => 2,
        //         'company_users_id' => 2,
        //         'value' => '3',
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        // ]);
    }
}
