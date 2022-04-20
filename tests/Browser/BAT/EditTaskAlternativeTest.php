<?php

namespace Tests\Browser\BAT;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class EditTaskAlternativeTest extends DuskTestCase
{
    public function test_user_not_type_data()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                    ->type('email', 'nice@gmail.com')
                    ->type('password', 'password')
                    ->press('Log in')
                    ->visit('/task/12')
                    ->press('Edit Task')
                    ->assertSee('The description field is required.');
        });
    }
}
