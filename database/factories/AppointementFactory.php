<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Hospital;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Appointement>
 */
class AppointementFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'hospital_id' => Hospital::factory(),
            'user_id' => User::factory(),
           'day' => fake()->date(),
           'time' => fake()->time(),
            //  $dateTime->format('d m,Y'),
        ];
    }
}
