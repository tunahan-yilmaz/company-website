<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        $this->call([
            AdminSeeder::class,
            SettingSeeder::class,
            AboutSeeder::class,
            SliderSeeder::class,
            ServiceSeeder::class,
            PortfolioSeeder::class,
            ReferenceSeeder::class,
            FaqSeeder::class,
            BlogSeeder::class,
        ]);
    }
}
