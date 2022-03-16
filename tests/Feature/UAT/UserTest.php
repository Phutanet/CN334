<?php

namespace Tests\Feature\UAT;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{

    public function test_display_login_page()
    {
        $response = $this->get('/login');

        $response->assertStatus(200);
    }

    public function test_display_register_page()
    {
        $response = $this->get('/register');

        $response->assertStatus(200);
    }

    public function test_display_index_page()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
