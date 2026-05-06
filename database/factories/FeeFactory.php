<?php

namespace Database\Factories;

use App\Models\Fee;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Fee>
 */
class FeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'student_id' => null, // You can set this to a valid student ID if needed
            'amount' => $this->faker->randomFloat(2, 100, 1000),
            'due_date' => $this->faker->date(),
            'status' => 'Unpaid',
        ];
    }
}
