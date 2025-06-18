<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\contacts>
 */
class ContactsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = \App\Models\contacts::class;

    public function definition(): array
    {
        return [
            'name'         => $this->faker->name(),
            'email'        => $this->faker->unique()->safeEmail(),
            'phone'        => $this->faker->phoneNumber(),
            'company_name' => $this->faker->company(),
            'message'      => $this->faker->sentences(3, true),
        ];
    }
}