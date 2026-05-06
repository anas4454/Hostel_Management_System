<?php

namespace Database\Factories;

use App\Models\Leave;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Leave>
 */
class LeaveFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'student_id' => $this->faker->numberBetween(1, 10), // You can set this to a valid student ID if needed
            'from_date' => $this->faker->date(),
            'to_date' => $this->faker->date(),
            'reason' => $this->faker->sentence(),
             'status' => 'Pending',
             'warden_id' => null,
        ];
    }
}
