<?php

namespace Database\Seeders;

use App\Models\UserResponse;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserResponsesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    
    public function run(): void
    {
        UserResponse::factory()->count(50)->create();
    }
}
