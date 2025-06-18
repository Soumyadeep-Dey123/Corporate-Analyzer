<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\companies>
 */
class CompaniesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'company_name'     => $this->faker->unique()->company(),          // e.g. “Globex Corporation”
            'company_email'    => $this->faker->unique()->companyEmail(),     // e.g. “info@globex.com”
            'company_phone'    => $this->faker->numerify('+1-###-###-####'),  // e.g. “+1‑555‑867‑5309”
            'company_location' => $this->faker->city() . ', ' . $this->faker->state(), // e.g. “Austin, Texas”
        ];
    }
}