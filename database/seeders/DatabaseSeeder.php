<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            FlightSeeder::class,
            CarSeeder::class,
            BrandSeeder::class,
            ProductSeeder::class,
            CategorySeeder::class,
            TaskSeeder::class,
            CompanySeeder::class
        ]);

    }
}
