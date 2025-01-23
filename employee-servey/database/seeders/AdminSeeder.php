<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('admin_users')->insert([
            'admin_name' => 'Super Admin',
            'admin_email' => 'admin@example.com',
            'admin_phone' => '1234567890',
            'password' => Hash::make('password123'),  // Use Hash facade for secure password hashing
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
    }
}
