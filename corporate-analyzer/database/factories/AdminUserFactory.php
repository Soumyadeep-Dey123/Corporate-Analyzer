<?php

namespace Database\Factories;

use App\Models\AdminUser;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class AdminUserFactory extends Factory
{
    protected $model = AdminUser::class;

    public function definition()
    {
        return [
            'admin_name' => $this->faker->name,
            'admin_email' => $this->faker->unique()->safeEmail,
            'admin_phone' => $this->faker->phoneNumber,
            'password' => 'password', // Will be hashed by the mutator
            'remember_token' => Str::random(10),
        ];
    }
}
