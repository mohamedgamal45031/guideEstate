<?php

namespace Database\Factories;

use App\Models\City;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Company>
 */
class CompanyFactory extends Factory
{
 
    public function definition()
    {
        return [
            'name' => $this->faker->company(),
            'city' => City::all()->random()->id,
            'address' => $this->faker->address(),
        ];
    }
}
