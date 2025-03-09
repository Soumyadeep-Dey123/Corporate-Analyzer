<?php

namespace Database\Factories;

use App\Models\CompanyUser;
use App\Models\Question;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\UserResponse;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UserResponse>
 */
class UserResponseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = UserResponse::class;
    public function definition(): array
    {
        return [
            'question_id' => Question::inRandomOrder()->first()->id,
            'company_users_id' => CompanyUser::factory(),
            'value' => $this->faker->numberBetween(1, 5),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
