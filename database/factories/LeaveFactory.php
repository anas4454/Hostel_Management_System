<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class LeaveFactory extends Factory
{
    public function definition(): array
    {
        return [

            'student_id' => User::where(
                'role',
                'student'
            )->inRandomOrder()->value('id'),

            'from_date' => fake()->date(),

            'to_date' => fake()->date(),

            'reason' => fake()->sentence(),

            'warden_id' => User::where(
                'role',
                'warden'
            )->inRandomOrder()->value('id'),

            'status' => fake()->randomElement([
                'Pending',
                'Approved',
                'Rejected'
            ]),
        ];
    }
}
