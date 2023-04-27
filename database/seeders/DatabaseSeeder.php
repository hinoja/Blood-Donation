<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Appointement;
use App\Models\Contact;
use App\Models\Hospital;
use App\Models\Post;
use App\Models\Services;
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
        $this->call([
            DaysHospitalSeeder::class,
        ]);
        User::factory()
            ->create([
                'name' => 'Super Admin',
                'email' => 'blood@donation.com',
                'role_id' => 1,
                'is_active' => true,
            ]);
        User::factory()->create([
            'name' => 'AdminValdez',
            'email' => 'Valdez1997tsangue@gmail.com',
            'role_id' => 1,
            'is_active' => true,
        ]);
        User::factory()->create([
            'name' => 'AdminJoel',
            'email' => 'hinoja2@gmail.com',
            'role_id' => 1,
            'is_active' => true,
        ]);
        User::factory(10)->create();
        Contact::factory(10)->create();
        Tag::factory(10)->create();
        Tag::factory(10)->create();
        Post::factory(30)
            ->has(Tag::factory(rand(2, 4)))
            ->create();
        Hospital::factory()
            ->count(15)
            ->has(Services::factory(rand(1, 5)))
            ->create();
        Appointement::factory(10)->create();
    }
}
