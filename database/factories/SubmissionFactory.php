<?php

namespace Database\Factories;

use App\Models\Contest;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Submission>
 */
class SubmissionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'contest_id' => Contest::inRandomOrder()->first()->id,
            'user_id' => User::inRandomOrder()->first()->id,
            'title' => $this->faker->sentence,
            'content_text' => $this->faker->paragraph,
            'content_file' => null,
        ];
    }
}
