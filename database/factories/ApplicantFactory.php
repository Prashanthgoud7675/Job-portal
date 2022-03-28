<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Applicant>
 */
class ApplicantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'Job_Id' => $this->faker->Job_Id(),
            'Applicant_Id' => $this->faker->Applicant_Id(),
            'First_Name' => $this->faker->First_Name(),
            'Last_Name' => $this->faker->Last_Name(),
            'City' => $this->faker->City(),
            'State' => $this->faker->State(),
            'Profile_url' => $this->faker->Profile_url(),
            'Notice_Period' => $this->faker->Notice_Period(),
            'DOB' => $this->faker->DOB(),
            'Email' => $this->faker->Email(),
            'Mobile' => $this->faker->Mobile(),
            'Gender' => $this->faker->Gender(),
            'Address1' => $this->faker->Address1(),
            'Address2' => $this->faker->Address2(),
            'Pincode' => $this->faker->Pincode(),
            'Remarks' => $this->faker->Rating(),

        ];
    }
}
