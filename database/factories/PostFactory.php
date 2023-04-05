<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $data = fake()->unique()->name(),
            'user_id' => User::factory(),
            'slug' => Str::slug($data),
            'content' => fake()->paragraph(75),
            'published_at' => fake()->randomElement([now(), null]),
            'image' => fake()->sentence(3, true),
        ];
    }
}
