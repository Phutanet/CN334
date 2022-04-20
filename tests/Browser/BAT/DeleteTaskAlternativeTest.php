<?php

namespace Tests\Browser\BAT;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class DeleteTaskAlternativeTest extends DuskTestCase
{
    public function test_user_can_delete_data()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                    ->type('email', 'kerk@gmail.com')
                    ->type('password', 'password')
                    ->press('Log in')
                    ->press('Delete')
                    ->assertDontSee("kerk's task");
        });
    }
}
