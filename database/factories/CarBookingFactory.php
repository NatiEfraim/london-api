<?php

namespace Database\Factories;

use App\Models\CarBooking;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CarBooking>
 */
class CarBookingFactory extends Factory
{


        /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CarBooking::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {


        $start_date = $this->faker->dateTimeBetween('2015-01-01', 'now')->format('Y-m-d');
        $end_date = $this->faker->dateTimeBetween($start_date . ' +1 days', $start_date . ' +7 days')->format('Y-m-d'); 

        return [
            //
            'booking_by' => User::inRandomOrder()->first()->id, 
            'start_date' =>  $start_date,
            'start_time' => $this->faker->time(),
            'end_date' => $end_date,
            'end_time' => $this->faker->time(),
            'status_booking' => $this->faker->numberBetween(1, 3), // Random between 1 -> pending, 2 -> approved, 3 -> canceled
            'drivers' => $this->faker->numberBetween(1, 4), // Random number of drivers

        ];
    }
}
