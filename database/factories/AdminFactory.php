<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Admin>
 */
class AdminFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'     => [
                'first'  => fake()->firstName(),
                'last'   => fake()->lastName(),
                'middle' => fake()->lastName(),
            ],
            'birthday'    => fake()->date(),
        ];
    }
}
