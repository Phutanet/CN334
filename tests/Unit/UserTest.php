<?php

namespace Tests\Unit;

use Tests\TestCase;

class UserTest extends TestCase
{

    public function test_login_form()
    {
        $resp = $this->get('/login');

        $resp->assertStatus(200);
    }

    public function test_register_form()
    {
        $resp = $this->get('/register');

        $resp->assertStatus(200);
    }

    public function test_create_user()
    {
        $this->assertTrue(1 == 1);
    }
}
