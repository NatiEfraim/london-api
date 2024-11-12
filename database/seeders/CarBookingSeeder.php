<?php

namespace Database\Seeders;

use App\Models\CarBooking;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarBookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
         // Generate 50 car bookings
        CarBooking::factory()->count(50)->create();
    }
}
