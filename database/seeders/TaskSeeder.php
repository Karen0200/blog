<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // $users_count = DB::table("users")->select("id")->count();
        $users_count = User::all()->random()->id;

        for($i = 0; $i < 10; $i++) {
            DB::table("tasks")->insert([
                "user_id" => $users_count,
                //rand(1, $users_count),
                "title" => Str::random(10),
                "completed" => rand(0,1)
            ]);
        }

    }
}
//DB::table('tasks')->insert([
//            'user_id' => User::all()->random()->id,
//            'title' => str::random(10),
//            'completed' => rand(0, 10),
//        ]);
