<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Companies as Company;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\surveys>
 */
class SurveysFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Try to grab a random existing company ID.
        $companyId = Company::query()->inRandomOrder()->value('id');

        return [
            'company_id'  => $companyId ?? Company::factory(), // fallback for tests
            'title'       => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'is_active'   => $this->faker->boolean(70),
            'start_date'  => now(),
            'end_date'    => now()->addMonth(),
        ];
    }
}