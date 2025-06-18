<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Response;

class ResponseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Response::factory()
        ->count(50)            // tweak the number as you like
        ->create();            // Laravel uses the factory definitions :contentReference[oaicite:6]{index=6}
    }
}