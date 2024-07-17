<?php

namespace Database\Factories;

use App\Models\Hotel;
use Illuminate\Database\Eloquent\Factories\Factory;

class HotelFactory extends Factory
{
    protected $model = Hotel::class;

    public function definition()
    {
        return [
            'hotel_name' => $this->faker->company,
            'hotel_desc' => $this->faker->text(100),
            'hotel_address' => $this->faker->address,
            'hotel_city' => $this->faker->city,
            'hotel_state' => $this->faker->state,
            'hotel_zip_code' => $this->faker->postcode,
            'hotel_phone_number' => $this->faker->phoneNumber,
            'hotel_email' => $this->faker->unique()->safeEmail,
        ];
    }
}
