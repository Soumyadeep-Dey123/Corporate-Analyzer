<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Response as ResponseModel; // alias to avoid the Policy clash
use App\Models\answers;
use App\Models\questions as Question;
use App\Models\Response;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\answers>
 */
class AnswersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Answers::class;

    public function definition(): array
    {
        return [
            'response_id' => Response::factory(),                // parent on‑the‑fly
            'question_id' => Question::query()->inRandomOrder()  // pick existing question
                                  ->value('id') ?? Question::factory(),
            'answer'      => $this->faker->sentence(),
        ];
    }
}