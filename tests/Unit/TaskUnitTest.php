<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Support\Facades\Schema;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use \Illuminate\Database\QueryException;

use App\Models\Task;

class TaskUnitTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    //Test Expected Schema Description Correct
    public function test_tasks_database_has_expected_description()
    {
        $this->assertTrue(
            Schema::hasColumn(
                'tasks', 'description'
            )
        );
    }

    //Test Expected Schema User_id Correct
    public function test_tasks_database_has_expected_user_id()
    {
        $this->assertTrue(
            Schema::hasColumn(
                'tasks', 'user_id'
            )
        );
    }

    //Test การรองรับภาษาไทยของ Description Attribute ของ Schema
    public function test_tasks_has_support_thai_description()
    {
        $task = new Task();
        $task->description = 'สวัสดีสมาชิกชมรมคนชอบ';
        $task->user_id = 1;
        $task->save();

        $this->assertEquals($task->description, 'สวัสดีสมาชิกชมรมคนชอบ');
    }

    //Test การรองรับภาษาอังกฤษของ Description Attribute ของ Schema
    public function test_tasks_has_support_english_description()
    {
        $task = new Task();
        $task->description = 'Hello';
        $task->user_id = 1;
        $task->save();

        $this->assertEquals($task->description, 'Hello');
    }

    //Test การกรอกตัวเลขติดลบของ user_id Attribute ของ Task Schema
    public function test_user_id_in_task_is_not_nagative_number()
    {
        $task = Task::all();

        foreach ($task as $i) {
            if ($i->user_id > 0) {
                continue;
            }
            $this->assertTrue(false);
        }
        $this->assertTrue(true);
    }

    //Test Description Attribute ของ Schema ว่าเป็นค่า NULL ได้ไหม
    public function test_task_is_null()
    {
        try {
            $task = new Task();
            $task->user_id = 1;
            $task->save();
            $this->assertTrue(false);
        } 
        catch (QueryException $e) {
            $this->assertTrue(true);
        }
    }
}