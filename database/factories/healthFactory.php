<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Health>
 */
class HealthFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'driver_id' => fake()->numberBetween(1,10),
            'pressure' => 'no',
            'diabetes' => 'no',
            'blood' =>fake()->bloodType(),
            'diseases' => 'no',
            'surgeries' => 'no',
        ];
    }
}
