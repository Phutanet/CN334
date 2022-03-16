<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Support\Facades\Schema;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;

class UserTest extends TestCase
{
    
    use RefreshDatabase, WithFaker;

    public function test_user_database_has_expected_columns()
    {
        $this->assertTrue(
            Schema::hasColumns(
                'users', ['id', 'name', 'email', 'email_verified_at', 'password','two_factor_secret','two_factor_recovery_codes', 'remember_token', 'current_team_id', 'profile_photo_path', 'created_at', 'updated_at']
            ));
    }
    
}

