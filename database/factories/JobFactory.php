<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'employer_id' => \App\Models\Employer::factory(),
            'title' => fake()->jobTitle(),
            'salary' => fake()->randomElement(['$100,000 USD', '$120,000 USD', '$140,000 USD', '$160,000 USD', '$180,000 USD', '$200,000 USD']),
            'location' => 'Remote',
            'schedule' => fake()->randomElement(['Full Time', 'Part Time', 'Contract']),
            'url' => fake()->url(),
            'isFeatured' => false,
        ];
    }
}
