<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Employee;

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
        //$employee = Employee::find($count);
        $employee = Employee::find($id);

        return Inertia::render('Show ')

        $count++;

        return [
            'name' => fake()->firstName,
            'office_head' => $employee->id,
            'building' => fake()->word
        ];
    }
}
