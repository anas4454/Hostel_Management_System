<?php

namespace Database\Factories;

use App\Models\Rooms;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Rooms>
 */
class RoomsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

     $types = [
        [
            'type' => 'Single',
            'seats' => 1,
            'price' => 8000,
            'features' => 'AC, Balcony',
            'facilities' => 'WiFi, Laundry, Fridge',
        ],
        [
            'type' => 'Double Sharing',
            'seats' => 2,
            'price' => 14000,
            'features' => 'AC, Attached Bath',
            'facilities' => 'WiFi, Laundry',
        ],
        [
            'type' => 'Triple Sharing',
            'seats' => 3,
            'price' => 6000,
            'features' => 'Non-AC',
            'facilities' => 'WiFi',
        ],
    ];

    $room = $this->faker->randomElement($types);
        return [
            'type' => $room['type'],
            'seats' => $room['seats'],
            'price' => $room['price'],
            'features' => $room['features'],
            'facilities' => $room['facilities'],
            'status' => $this->faker->randomElement(['Available', 'Booked', 'pending Approval']),
            
        ];
    }
}

