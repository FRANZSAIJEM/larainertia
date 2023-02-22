<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $designation = ['Accounts payable clerk','Data entry clerk','Receptionist','Administrative assistant','Mail clerk','Office manager','Account manager',''];

        return [
            'last_name' => fake()->lastName,
            'first_name' => fake()->firstName,
            'designation' => fake()->randomElement($designation),


        ];
    }
}
