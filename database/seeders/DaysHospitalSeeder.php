<?php

namespace Database\Seeders;

use App\Models\DaysHospital;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DaysHospitalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DaysHospital::create(['name' => 'Monday']);
        DaysHospital::create(['name' => 'Tuesday']);
        DaysHospital::create(['name' => 'Wednesday']);
        DaysHospital::create(['name' => 'Thursday']);
        DaysHospital::create(['name' => 'Friday']);
        DaysHospital::create(['name' => 'Saturday']);
        DaysHospital::create(['name' => 'Sunday']);
    }
}
