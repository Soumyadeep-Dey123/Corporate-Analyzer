<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Surveys as Survey;
use App\Models\Question;
use Illuminate\Support\Carbon;
use App\Models\companies as Company; // Assuming you have a Company model
use Illuminate\Support\Facades\DB;

class SurveyAndQuestionsSeeder extends Seeder
{
    public function run(): void
    {
        $company = Company::first()
                   ?? Company::create([
                        'company_name'   => 'Demo Company',
                        'company_email'  => 'demo@example.com',
                        'company_phone'  => '000‑000‑0000',
                        'company_location' => 'Nowhere',
                   ]);

$survey = $company->surveys()->create([
  'title'       => 'Demo Survey',
  'description' => 'A short demo to test multi‑step forms',
  'is_active'   => true,
  'start_date'  => now(),
  'end_date'    => now()->addYear(),
]);


        // Define step-by-step questions
        $questions = [
            ['question' => 'Full Name',                                        'type' => 'text'],
            ['question' => 'Email Address',                                   'type' => 'text'],
            ['question' => 'Department (hr/engineering/marketing/sales/finance/operations/other)', 'type' => 'text'],
            ['question' => 'Position/Job Title',                              'type' => 'text'],
            ['question' => 'Years of Experience (<1, 1-2, 3-5, 6-10, >10)',    'type' => 'text'],
            ['question' => 'How engaged do you feel at work? (1–5)',          'type' => 'text'],
            ['question' => 'How satisfied are you with your current role? (1–5)','type' => 'text'],
            ['question' => 'Rate your work–life balance (1–5)',               'type' => 'text'],
            ['question' => 'Team communication effectiveness (1–5)',          'type' => 'text'],
            ['question' => 'Leadership quality (1–5)',                        'type' => 'text'],
            ['question' => 'Growth opportunities (1–5)',                      'type' => 'text'],
            ['question' => 'What do you enjoy most about working here?',      'type' => 'text'],
            ['question' => 'What improvements would you suggest?',            'type' => 'text'],
            ['question' => 'How likely are you to recommend this company? (1–5)','type' => 'text'],
        ];

        // Add each question to the survey
        foreach ($questions as $item) {
            $survey->questions()->create($item);
        }
    }
}