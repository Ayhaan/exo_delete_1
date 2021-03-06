<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MembreFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "nom" => $this->faker->name(), 
            "genre" => $this->faker->title(), 
            "age" => $this->faker->numberBetween($min = 18, $max = 80), 
        ];
    }
}
