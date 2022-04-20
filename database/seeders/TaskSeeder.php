<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Task;
use App\Models\User;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            "id" => 1,
            "name" => "ice",
            "email" => "ice@gmail.com",
            "password" => bcrypt("password"),
        ]);

        User::create([
            "id" => 2,
            "name" => "nice",
            "email" => "nice@gmail.com",
            "password" => bcrypt("password"),
        ]);

        User::create([
            "id" => 3,
            "name" => "kerk",
            "email" => "kerk@gmail.com",
            "password" => bcrypt("password"),
        ]);

        //Create Task Seeder
        Task::create([
            "description" => "ice's task",
            "user_id" => 1,
        ]);

        Task::create([
            "description" => "nice's task",
            "user_id" => 2,
        ]);

        Task::create([
            "description" => "kerk's task",
            "user_id" => 3,
        ]);
    }
}
