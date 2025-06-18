<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Subscription;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Subscription>
 */
class SubscriptionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Subscription::class;

    public function definition(): array
    {
        return [
            'email'       => $this->faker->unique()->safeEmail(),      // dummy address :contentReference[oaicite:6]{index=6}
            'token'       => Str::random(64),                          // GUID‑like token :contentReference[oaicite:7]{index=7}
            'verified_at' => $this->faker->optional()->dateTimeBetween('-1 year', 'now'),
        ];
    }
}