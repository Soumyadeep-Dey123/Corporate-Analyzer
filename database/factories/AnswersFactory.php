<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Response as ResponseModel; // alias to avoid the Policy clash
use App\Models\answers;
use App\Models\questions;


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
            'response_id' => ResponseModel::factory(),        // create parents on the fly :contentReference[oaicite:5]{index=5}
            'question_id' => Questions::factory(),
            'answer'      => $this->faker->sentence(),        // or ->paragraph()
        ];
    }
}