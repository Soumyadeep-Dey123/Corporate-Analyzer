<?php

namespace Database\Seeders;

use App\Models\surveys;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SurveysSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        surveys::factory()->count(30)->create();
    }
}