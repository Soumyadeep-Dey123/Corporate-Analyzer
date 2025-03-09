<?php

namespace Database\Factories;

use App\Models\CompanyMaster;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CompanyMaster>
 */
class CompanyMasterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */


    protected $model = CompanyMaster::class;
    public function definition(): array
    {
        return [
            'company_name' => $this->faker->company(),
            'company_address' => $this->faker->address(),
            'company_email' => $this->faker->unique()->companyEmail(),
            'company_phone' => $this->faker->phoneNumber(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
