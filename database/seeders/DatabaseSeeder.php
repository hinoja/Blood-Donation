<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Contact;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            RoleSeeder::class,
        ]);
        User::factory()
            ->create([
                'name' => 'Super Admin',
                'email' => 'blood@donation.com',
                'role_id' => 1,
            ]);
        User::factory(10)->create();
        Contact::factory(10)->create();
        Tag::factory(10)->create();
        Post::factory(30)
            ->has(Tag::factory(rand(2, 4)))
            ->create();
    }
}
