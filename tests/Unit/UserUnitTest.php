<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Support\Facades\Schema;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use \Illuminate\Database\QueryException;

use App\Models\User;


class UserUnitTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    //ทดสอบว่าตารางของ User Class มี Attribute ที่ Expected ไว้หรือไม่
    public function test_user_database_has_expected_columns()
    {
        $this->assertTrue(
            Schema::hasColumns( //Schema=class, hasColumns=function in class
                'users', ['id', 'name', 'email', 'email_verified_at', //users=Table, [attribute]
                'password','two_factor_secret','two_factor_recovery_codes', 'remember_token', 
                'current_team_id', 'profile_photo_path', 'created_at', 'updated_at']
            ));
    }

    //ทดสอบว่า Email Attribute มีค่าซ้ำกันได้หรือไม่
    public function test_email_can_duplication()
    {
        try {

            $user1 = new User();
            $user1->id = 4;
            $user1->name = 'user1';
            $user1->email = 'a@abc.com';
            $user1->password = 'password';
            $user1->save();

            $user2 = new User();
            $user2->id = 5;
            $user2->name = 'user2';
            $user2->email = 'a@abc.com';
            $user2->password = 'password2';
            $user2->save();

            $this->assertTrue(false);

        } catch (QueryException $e) {
            $this->assertTrue(true);
        }
        
    }

    //ทดสอบ Name Attribute ห้ามมี Character เกิน 40 ตัว
    public function test_name_attribute_less_than_41_char()
    {
        $user = User::all();

        foreach ($user as $i) {
            if ($i->name <= 40) {
                continue;
            }
            $this->assertTrue(false);
        }
        $this->assertTrue(true);
    }
}

