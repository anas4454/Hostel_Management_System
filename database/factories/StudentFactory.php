<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'roll_number' => $this->faker->unique()->numberBetween(1000, 9999),
            'phone' => $this->faker->phoneNumber(),
            'room_id' => null, // You can set this to a valid room ID if needed
            'parent_id' => null, // You can set this to a valid parent ID if
        ];
    }
}
