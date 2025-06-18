<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DemoSurvey>
 */
class DemoSurveyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
{
    return [
        'name'               => $this->faker->name(),
        'email'              => $this->faker->unique()->safeEmail(),
        'department'         => $this->faker->randomElement(['hr','engineering','marketing','sales','finance','operations','other']),
        'position'           => $this->faker->jobTitle(),
        'work_experience'    => $this->faker->randomElement(['less-than-1','1-2','3-5','6-10','more-than-10']),
        'engagement'         => rand(1,5),
        'satisfaction'       => rand(1,5),
        'work_life_balance'  => rand(1,5),
        'communication'      => rand(1,5),
        'leadership'         => rand(1,5),
        'growth'             => rand(1,5),
        'recommend'          => rand(1,5),
        'feedback'           => $this->faker->sentence(),
        'improvements'       => $this->faker->sentence(),
    ];
}

}