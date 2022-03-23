<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Support\Facades\Schema;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;

class TaskUnitTest extends TestCase
{

    use RefreshDatabase, WithFaker;

    public function test_tasks_database_has_expected_columns() 
    {
        $this->assertTrue(
            Schema::hasColumns(
                'tasks', ['id', 'description', 'user_id', 'created_at', 'updated_at']
            ));
    }
}
