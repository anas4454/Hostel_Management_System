<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Room;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    public function definition(): array
    {
        return [

            'user_id' => User::factory(),
            'roll_number' => $this->faker->unique()->numerify('RN###'),
            'phone' => $this->faker->phoneNumber(),
        ];
    }
}

