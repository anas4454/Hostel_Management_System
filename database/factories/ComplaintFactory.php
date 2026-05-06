<?php

namespace Database\Factories;

use App\Models\Complaint;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Complaint>
 */
class ComplaintFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'student_id' =>$this->faker->numberBetween(1, 10), // You can set this to a valid student ID if needed
            'subject' => $this->faker->sentence(),
            'description' => $this->faker->paragraph(),
             'status' => 'Pending',
             'warden_id' => null,
        ];
    }
}

