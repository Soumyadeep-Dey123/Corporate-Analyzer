<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\answers; 

class AnswersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        answers::factory()
              ->count(100)       // adjust as needed
              ->create();        // mass‑inserts in one go :contentReference[oaicite:7]{index=7}
    
    }
}