<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Models\Task;
use App\Models\User;

class TodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    use RefreshDatabase, WithFaker;
    
    public function run()
    {
        $user = User::factory()->create();

        DB::table('tasks')->insert([
            "description" => "example",
            "user_id" => $user->id,

        ]);
    }
}