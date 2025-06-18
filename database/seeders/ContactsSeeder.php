<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\contacts;

class ContactsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        contacts::factory()->count(50)->create();
    }
}