<?php

namespace Database\Seeders;

use App\Models\Hotel;
use App\Models\Rooms;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class HotelSeeder extends Seeder
{
    public function run()
    {
        // Create 10 hotels, each with 5 rooms
        Hotel::factory()
            ->count(3)
            ->has(Rooms::factory()->count(5), 'rooms')
            ->create();
    }
}
