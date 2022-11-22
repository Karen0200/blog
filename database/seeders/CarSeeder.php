<?php

namespace Database\Seeders;

use App\Models\Car;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Http\Controllers\CarController;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;


class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 15; $i++) {
            Car::query()->insert(
                [
                    'Brand' => Str::random(10),
                    'Model' => Str::random(10),
                    'Year' => rand(1900, 2022),
                    "Mileage" => rand(0, 1000000),
                    'Color' => Str::random(10),
                    "Prise" => rand(10000, 1000000),
                ]
            );
        }
    }
}
