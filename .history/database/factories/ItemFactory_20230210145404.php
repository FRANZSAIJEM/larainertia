<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Office;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Item>
 */
class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

static $count = 1;
$office = Office::find($count);
$count++;

        return [
            'office_id' => rand(1, 50),
            'name'=>fake()->firstName,
            'description'=>fake()->sentence,
            'value'=>rand(1,25),
            'status'=>fake()->word,
            'date_acquired'=>fake()->date($format = 'Y-m-d', $max = 'now')

        ];
    }
}
