<?php

namespace Database\Seeders;

use App\Models\CompanyMaster;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompanyMasterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CompanyMaster::factory()->count(5)->create();
    }
}
