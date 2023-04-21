<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Hospital>
 */
class HospitalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $data = fake()->unique()->company(),
            'slug' => Str::slug($data),
            // 'urgenceNumber' => mt_rand(650000000, 690000000),
            'urgenceNumber' => fake()->e164PhoneNumber(),
            'latitude' =>  fake()->latitude(0),
            'email' =>  fake()->unique()->email(),
            'longitude' =>  fake()->longitude(-10),
            'town' => fake()->city(),
            'country' => fake()->country(),
            'region' => fake()->address(),
            'birth' =>  fake()->dateTime(),
            // 'logo' =>  fake()->imageUrl(),storage/hospitals/logo/no-logo.png
            'logo' =>  "no-logo.png",
            // 'descriptionFile' => fake()->mimeType(),
            'siteInternet' => fake()->url(),
            'description' => fake()->unique()->realText(25, 2),
            'is_active' => fake()->boolean(50),
        ];
    }
}
