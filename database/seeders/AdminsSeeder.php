<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Admins; // Ensure the correct model is imported

class AdminsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
{
    // \App\Models\Admins::updateOrCreate(
    //     ['email' => 'admin@example.com'],
    //     ['name' => 'Super Admin', 'password' => Hash::make('secret')]
    // );
}
}