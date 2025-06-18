<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Response;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Response>
 */
class ResponseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Response::class;

    public function definition(): array
    {
        return [
            'survey_id'    => \App\Models\surveys::factory(),   // create related models on the fly
            'employee_id'  => \App\Models\employees::factory(),
            'submitted_at' => $this->faker->optional()
                                          ->dateTimeBetween('-1 month', 'now'),  // random or null :contentReference[oaicite:5]{index=5}
        ];
    }
}