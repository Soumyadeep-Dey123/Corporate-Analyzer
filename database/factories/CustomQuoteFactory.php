<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CustomQuote>
 */
class CustomQuoteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = \App\Models\CustomQuote::class;

    public function definition(): array
    {
        return [
            'company_name'   => $this->faker->company(),
            'contact_person' => $this->faker->name(),
            'email'          => $this->faker->unique()->companyEmail(),
            'phone'          => $this->faker->phoneNumber(),
            'company_size'   => $this->faker->randomElement(['Small', 'Medium', 'Large']),
            'requirements'   => $this->faker->paragraphs(2, true),
        ];
    }
}