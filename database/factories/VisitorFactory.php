<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class VisitorFactory extends Factory
{
    public function definition(): array
    {
        return [

            'student_id' => User::factory()->create(['role' => 'Student'])->id,
            'warden_id' => User::factory()->create(['role' => 'Warden'])->id,
            'visitor_name' => $this->faker->name(),
            'relation' => $this->faker->randomElement(['Parent', 'Sibling', 'Friend', 'Other']),
            'phone' => $this->faker->phoneNumber(),
            'visit_date' => $this->faker->date(),
        ];
    }
}


