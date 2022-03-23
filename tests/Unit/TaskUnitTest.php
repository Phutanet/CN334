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

    //Test Expected Schema Description Correct

    //Test Expected Schema User_id Correct

    //Test การรองรับภาษาไทยของ Description Attribute ของ Schema

    //Test การรองรับภาษาอังกฤษของ Description Attribute ของ Schema

    //Test การกรอกตัวเลขติดลบของ user_id Attribute ของ Task Schema

    //Test Description Attribute ของ Schema ว่าเป็นค่า NULL ได้ไหม
}
