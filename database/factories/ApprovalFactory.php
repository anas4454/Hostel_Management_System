<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Room;
use Illuminate\Database\Eloquent\Factories\Factory;

class ApprovalFactory extends Factory
{
    public function definition(): array
    {
        return [

            // 'student_id' => User::where('role', 'student')->inRandomOrder()->first()?->id,
            'student_id' => User::where('role','student')->pluck('id')->random(),
            'room_id' => Room::inRandomOrder()->first()?->id,
            'warden_id' => User::where('role', 'warden')->inRandomOrder()->first()?->id,
            'status' => fake()->randomElement([
                'Pending',
                'Approved',
                'Rejected'
            ]),
        ];
    }
}
