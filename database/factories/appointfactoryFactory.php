<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class appointfactoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            ` 'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'phone' => fake()->phone(),
            'doctor' => fake()->doctor(),
            'message' => fake()->message(),
            'status' => fake()->status(),
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),`

        ];
    }
}
