<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Questions as Question;
use App\Models\Surveys as Survey; 
use App\Enums\QuestionType; 
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\questions>
 */
class QuestionsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Question::class;

    public function definition(): array
    {
        // pick an existing survey or fall back to a factory
        $surveyId = Survey::query()->inRandomOrder()->value('id')
                   ?? Survey::factory();

        return [
            'survey_id' => $surveyId,
            'question'  => $this->faker->sentence(),
            // pass *either* the enum case *or* its scalar value
            'type'      => $this->faker
                                ->randomElement(QuestionType::cases()), // enum case
            // or ->randomElement(QuestionType::cases())->value          // string
        ];
    }
}