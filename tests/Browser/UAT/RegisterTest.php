<?php

namespace Tests\Browser\UAT;

use Illuminate\Foundation\Testing\DatabaseMigrations;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class RegisterTest extends DuskTestCase
{
    public function test_user_can_go_to_register_page()
    {
        $this->browse(function ($browser) {
            $browser->visit('/')
                    ->clickLink('Register')
                    ->assertPathIs('/register');
        });
    }
}
