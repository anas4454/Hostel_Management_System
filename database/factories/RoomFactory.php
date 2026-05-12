<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class RoomFactory extends Factory
{
    public function definition(): array
    {
        $rooms = [

            [
                'type' => 'Single',
                'seats' => 1,
                'price' => 15000,
                'features' => 'AC, Balcony',
                'facilities' => 'WiFi, Laundry',
            ],

            [
                'type' => 'Double Sharing',
                'seats' => 2,
                'price' => 10000,
                'features' => 'AC, Attached Bath',
                'facilities' => 'WiFi, Laundry',
            ],

            [
                'type' => 'Triple Sharing',
                'seats' => 3,
                'price' => 8000,
                'features' => 'Non-AC',
                'facilities' => 'WiFi',
            ],
        ];

        $room = fake()->randomElement($rooms);

        return [

            'room_number' => 'R-' . fake()->unique()->numberBetween(1, 30),
            'type' => $room['type'],
            'seats' => $room['seats'],
            'price' => $room['price'],
            'features' => $room['features'],
            'facilities' => $room['facilities'],
        ];
    }
}
