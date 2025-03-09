<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\AdminUser; // Add AdminUser model import

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        // Clear any existing records to avoid duplicates
        AdminUser::truncate();  // This will delete all existing records in the admin_users table

        // Insert a new admin user
        AdminUser::create([
            'admin_name' => 'Super Admin',
            'admin_email' => 'admin@example.com',
            'admin_phone' => '1234567890',
            'password' => 'password123', // The mutator in AdminUser will hash this automatically
            'remember_token' => null, // Optional, you can add a token if needed
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
