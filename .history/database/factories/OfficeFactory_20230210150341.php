<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Office>
 */
class OfficeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */


    public function definition()
    {

        static $count = 1;
        $employee = Employee
        return [
            'name' => fake()->firstName,
            'office_head' => rand(1, 50),
            'building' => fake()->word
        ];
    }
}
