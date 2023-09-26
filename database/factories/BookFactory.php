<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'availability_status' => $this->faker->randomElement(['available', 'not-available']),
            'title' => $this->faker->sentence,
            'release_year' => $this->faker->numberBetween(1900, date('Y')),
        ];
    }
}
