<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Employee;

class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Employee::class;
    public function definition()
    {
        return [
            'first_name' => $this->faker->firstNameMale(),
            'surname' => $this->faker->lastName(),
            'email' => $this->faker->email,
            'tel_no' => $this->faker->numerify('07###-######')
        ];
    }
}
