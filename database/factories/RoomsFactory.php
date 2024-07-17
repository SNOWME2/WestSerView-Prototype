<?php

namespace Database\Factories;

use App\Models\Room;
use App\Models\Hotel;
use App\Models\Rooms;
use Illuminate\Database\Eloquent\Factories\Factory;

class RoomsFactory extends Factory
{
    protected $model = Rooms::class;

    public function definition()
    {
        return [
            'hotel_id' => Hotel::factory(),
            'room_number' => $this->faker->unique()->numberBetween(100, 999),
            'room_type' => $this->faker->randomElement(['Single', 'Double', 'Suite']),
            'capacity' => $this->faker->numberBetween(1, 4),
            'price' => $this->faker->numberBetween(50, 500),
        ];
    }
}
