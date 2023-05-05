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
            'start' => fake()->dateTime(now()->addWeek()),
            'end' => fake()->dateTime(now()),
            //  $dateTime->format('d m,Y'),
        ];
    }
}
