<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'JobId' => $this->faker->JobId(),
            'JobTitle' => $this->faker->JobTitle(),
            'Description' => $this->faker->Description(),
            'Positions' => $this->faker->Positions(),
            'Location' => $this->faker->Location(),
            'AnnualSalary' => $this->faker->AnnualSalary(),
            'DeptId' => $this->faker->DeptId(),
            'EmpId' => $this->faker->EmpId(),
            'Active' => $this->faker->Active(),
            'CreatedDate' => $this->faker->CreatedDate(),
            'CreatedBy' => $this->faker->CreatedBy(),
            'Remarks' => $this->faker->Remarks(),
            'JobsId' => $this->faker->JobsId(),
            'CloseDate' => $this->faker->CloseDate()
        ];
    }
}
