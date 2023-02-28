<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Frase>
 */
class FraseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
                'text' => fake()->sentence(),
                'image' => fake()->sentence(),
                'author' => fake()->name(), 
        ];
    }
}
