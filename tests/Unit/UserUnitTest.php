<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Support\Facades\Schema;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;

use App\Models\User;

class UserUnitTest extends TestCase
{
    
    use RefreshDatabase, WithFaker;

    public function test_user_database_has_expected_columns()
    {
        $this->assertTrue(
            Schema::hasColumns( //Schema=class, hasColumns=function in class
                'users', ['id', 'name', 'email', 'email_verified_at', //users=Table, [attribute]
                'password','two_factor_secret','two_factor_recovery_codes', 'remember_token', 
                'current_team_id', 'profile_photo_path', 'created_at', 'updated_at']
            ));
    }

    public function test_user_duplication()
    {
        $user1 = User::make([
            'name' => 'phutanet', //attribute => value
            'email' => 'ice.test1@gmail.com'
        ]);

        $user2 = User::make([
            'name' => 'phutanet',
            'email' => 'ice.test2@gmail.com'
        ]);
        
        $this->assertTrue($user1->email != $user2->email);
    }
    
}

