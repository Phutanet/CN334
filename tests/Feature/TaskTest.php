<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use App\Models\Task;
use App\Models\User;

class TaskTest extends TestCase
{
    use RefreshDatabase, WithFaker;
    
    public function test_create_task_successfully() 
    {

        $user = User::factory()->create();
        $this->actingAs($user, 'sanctum');

        $taskData = [
            "description" => "example"
        ];

        $this->json('POST', '/task', $taskData, ['Accept' => 'application/json'])
            ->assertStatus(201)
            ->assertJson([
                "description" => "example",
                "user_id" => $user->id,
                'message' => 'create success'
            ]);
    }
}
