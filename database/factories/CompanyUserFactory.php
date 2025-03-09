<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\CompanyUser;
use App\Models\CompanyMaster;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CompanyUser>
 */
class CompanyUserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = CompanyUser::class;
    public function definition(): array
    {
        return [
            'company_id' => CompanyMaster::inRandomOrder()->first()->id ?? CompanyMaster::factory(),
            'users_name' => $this->faker->name(),
            'users_email' => $this->faker->unique()->safeEmail(),
            'users_phone' => $this->faker->phoneNumber(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
