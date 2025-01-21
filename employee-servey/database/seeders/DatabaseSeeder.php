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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // Insert data into the 'questions' table
        DB::table('questions')->insert([
            ['question' => 'What is your favorite color?', 'created_at' => now(), 'updated_at' => now()],
            ['question' => 'How do you rate our service?', 'created_at' => now(), 'updated_at' => now()],
            ['question' => 'What is your preferred mode of communication?', 'created_at' => now(), 'updated_at' => now()],
            ['question' => 'How satisfied are you with your current work environment?', 'created_at' => now(), 'updated_at' => now()],
            ['question' => 'How would you rate the cleanliness and maintenance of the office?', 'created_at' => now(), 'updated_at' => now()],
            ['question' => 'How satisfied are you with the communication between departments?', 'created_at' => now(), 'updated_at' => now()],
            ['question' => 'How satisfied are you with your current role and responsibilities?', 'created_at' => now(), 'updated_at' => now()],
            ['question' => 'How likely are you to recommend this company as a great place to work?', 'created_at' => now(), 'updated_at' => now()],
            ['question' => 'Are you satisfied with the flexibility offered to balance work and personal life?', 'created_at' => now(), 'updated_at' => now()],
            ['question' => 'How would you rate the overall leadership of the organization?', 'created_at' => now(), 'updated_at' => now()],
            ['question' => 'How satisfied are you with the benefits offered (e.g., health insurance, paid time off)?', 'created_at' => now(), 'updated_at' => now()],
        ]);

        // Insert data into the 'company_users' table
        DB::table('company_users')->insert([
            [
                'company_id' => 1,
                'users_name' => 'John Doe',
                'users_email' => 'john.doe@example.com',
                'users_phone' => '1234567890',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'company_id' => 1,
                'users_name' => 'Jane Smith',
                'users_email' => 'jane.smith@example.com',
                'users_phone' => '0987654321',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        // Seed company_masters table
        DB::table('company_masters')->insert([
            [
                'company_name' => 'Tech Innovators',
                'company_address' => '123 Tech Street',
                'company_email' => 'info@tech.com',
                'company_phone' => '1234567890',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'company_name' => 'Future Solutions',
                'company_address' => '456 Innovation Blvd',
                'company_email' => 'contact@future.com',
                'company_phone' => '9876543210',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        // Seed admin_users table
        DB::table('admin_users')->insert([
            [
                'admin_name' => 'Admin One', 
                'admin_email' => 'admin1@company.com', 
                'admin_phone' => '3333333333',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'admin_name' => 'Admin Two', 
                'admin_email' => 'admin2@company.com', 
                'admin_phone' => '4444444444',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        // Insert data into the 'user_responses' table
        DB::table('user_responses')->insert([
            [
                'question_id' => 1,
                'company_users_id' => 1,
                'value' => '2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 2,
                'company_users_id' => 2,
                'value' => '3',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
