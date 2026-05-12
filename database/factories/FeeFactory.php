<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Room;
use Illuminate\Database\Eloquent\Factories\Factory;

class FeeFactory extends Factory
{
    public function definition(): array
    {
        return [

            'student_id' => User::where('role', 'student')->inRandomOrder()->value('id'),

            'room_id' => Room::inRandomOrder()
                ->value('id'),

            'month' => fake()->monthName(),

            'year' => now()->year,

            'amount' => fake()->randomElement([
                8000,
                10000,
                15000
            ]),

            'status' => fake()->randomElement([
                'Paid',
                'Unpaid'
            ]),

            'paid_at' => fake()->optional()
                ->dateTimeThisYear(),
        ];
    }
}
