<?php

namespace Database\Factories;

// database/factories/AdminFactory.php
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\admins>
 */
class AdminsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

public function definition(): array
{
    return [
        'name'     => $this->faker->name,
        'email'    => $this->faker->unique()->safeEmail,
        'password' => Hash::make('password'),   // change later
    ];
}

}