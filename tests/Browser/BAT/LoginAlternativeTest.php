<?php

namespace Tests\Browser\BAT;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\DatabaseMigrations;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LoginAlternativeTest extends DuskTestCase
{
    use RefreshDatabase, WithFaker;

    public function test_if_user_dont_have_account_in_database_user_cant_login()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                    ->type('email', 'emailexample@abc.com')
                    ->type('password', 'passwordexample')
                    ->press('Log in')
                    ->assertPathIs('/login');
        });
    }

    public function test_if_user_input_thai_language_user_cant_login()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                    ->type('email', 'สวัสดี')
                    ->type('password', 'สมาชิกชมรม')
                    ->press('Log in')
                    ->assertPathIs('/login');
        });
    }
}
