<?php

namespace Tests\Browser\BAT;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class RegisterAlternativeTest extends DuskTestCase
{
    public function test_password_and_repassword_not_match()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/register')
                    ->type('name', 'name')
                    ->type('email', 'example@abc.com')
                    ->type('password', 'password1')
                    ->type('password_confirmation', 'password2')
                    ->press('Register')
                    ->assertPathIs('/register');
        });
    }

    public function test_user_not_type_data()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/register')
                    ->press('Register')
                    ->assertPathIs('/register');
        });
    }
}
