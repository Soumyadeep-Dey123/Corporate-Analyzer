<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
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
    }
}
