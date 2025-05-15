<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contest>
 */
class ContestFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $start = $this->faker->dateTimeBetween('+1 days', '+1 week');
        $end = (clone $start)->modify('+3 days');

        return [
            'title' => $this->faker->sentence(3),
            'description' => $this->faker->paragraph,
            'start_at' => $start,
            'end_at' => $end,
            'is_announced' => false,
        ];
    }
}
