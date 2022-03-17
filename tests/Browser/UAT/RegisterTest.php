<?php

namespace Tests\Browser\UAT;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\DatabaseMigrations;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

use App\Models\User;

class RegisterTest extends DuskTestCase
{

    use RefreshDatabase, WithFaker;

    public function test_user_can_register()
    {
        $this->browse(function ($browser) {
            $browser->visit('/register')
                    ->type('name', 'example')
                    ->type('email', 'example@abc.com')
                    ->type('password', 'examplepassword')
                    ->type('password_confirmation', 'examplepassword')
                    ->press('Register')
                    ->assertPathIs('/dashboard');
        });
    }
}
