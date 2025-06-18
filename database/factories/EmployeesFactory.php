<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Companies as Company;
use App\Models\Employees as Employee;
use Illuminate\Database\Eloquent\ModelNotFoundException;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\employees>
 */
class EmployeesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Employee::class;

    public function definition(): array
    {
        $companyId = Company::inRandomOrder()->value('id');   // fast random picker :contentReference[oaicite:4]{index=4}
        if (!$companyId) {
            throw new ModelNotFoundException('No companies found – seed companies first.');
        }

        return [
            'company_id'     => $companyId,
            'employee_name'  => $this->faker->name(),
            'employee_email' => $this->faker->unique()->safeEmail(),
            'employee_phone' => $this->faker->numerify('+91-##########'), // tweak for your locale :contentReference[oaicite:5]{index=5}
        ];
    }
}