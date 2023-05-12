<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Tag;
use App\Models\Post;
use App\Models\User;
use App\Models\Contact;
use App\Models\Hospital;
use App\Models\Services;
use Illuminate\Support\Str;
use Laravolt\Avatar\Avatar;
use App\Models\Appointement;
use Illuminate\Database\Seeder;
use Database\Seeders\EventSeeder;

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
        // $this->call([EventSeeder::class,]);
        $this->call([
            DaysHospitalSeeder::class,
        ]);
        User::factory()->create([
            'name' => $name =  'peronal1',
            'email' => 'tateon@artfact.com',
            'role_id' => 4,
            'avatar' => fake()->image('public/storage/users/avatars/', 500, 500, $name, false),
            'is_active' => true,
        ]);


        User::factory()->create([
            'name' => $name = 'peronal1',
            'email' => 'mailtor@artfact.com',
            'role_id' => 4,
            'avatar' => fake()->image('public/storage/users/avatars/', 500, 500, $name, false),
            'is_active' => true,
        ]);

        $user1 = User::factory()
            ->create([
                'name' => $name1 = 'Super Admin',
                'email' => 'blood@donation.com',
                'avatar' => fake()->image('public/storage/users/avatars/', 500, 500, $name1, false),
                'role_id' => 1,
                'is_active' => true,
            ]);
        $user2 = User::factory()->create([
            'name' => $name2 = 'AdminValdez',
            'email' => 'Valdez1997tsangue@gmail.com',
            'role_id' => 1,
            'avatar' => fake()->image('public/storage/users/avatars/', 500, 500, $name2, false),
            'is_active' => true,
        ]);

        $user3 =  User::factory()->create([
            'name' => $name3 = 'AdminJoel',
            'email' => 'hinoja2@gmail.com',
            'role_id' => 1,
            'avatar' => fake()->image('public/storage/users/avatars/', 500, 500, $name3, false),
            'is_active' => true,
        ]);

        User::factory(5)->create();
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
        Appointement::factory(30)->create();
        // User::find(3)->avatar = Avatar::create(Str::slug($name1))->save("storage/users/avatars/" . Str::slug($name1) . '.png', 500);
        // $user2->avatar = Avatar::create(Str::slug($name2))->save("storage/users/avatars/" . Str::slug($name2) . '.png', 500);
        // $user3->avatar = Avatar::create(Str::slug($name3))->save("storage/users/avatars/" . Str::slug($name3) . '.png', 500);
    }
}
