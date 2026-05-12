<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ComplaintFactory extends Factory
{
    public function definition(): array
    {
        return [

            'student_id' => User::whereIn(
                'role',
                ['student']
            )->pluck('id')->random() ?? null,

            'subject' => fake()->sentence(),

            'description' => fake()->paragraph(),

            'warden_id' => User::where(
                'role',
                'warden'
            )->inRandomOrder()->value('id'),

            'status' => fake()->randomElement([
                'Pending',
                'Resolved',
                'Rejected',
            ]),
        ];
    }
}
