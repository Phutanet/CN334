<?php

namespace Tests\Browser\UAT;

use Illuminate\Foundation\Testing\DatabaseMigrations;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class BasicFlowUAT extends DuskTestCase
{
    public function test_user_can_go_to_register_page()
    {
        $this->browse(function ($browser) {
            $browser->visit('/')
                    ->clickLink('Register')
                    ->assertPathIs('/register');
        });
    }

    public function test_user_can_login()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                    ->type('email', 'ice@gmail.com')
                    ->type('password', 'password')
                    ->press('Log in')
                    ->assertPathIs('/dashboard');
        });
    }

    //user สามารถสร้าง task ได้
    public function test_user_can_add_task()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                    ->type('email', 'nice@gmail.com')
                    ->type('password', 'password')
                    ->press('Log in')
                    ->visit('/task')
                    ->type('description', 'สวัสดีสมาชิก')
                    ->press('Add Task')
                    ->assertPathIs('/task');
        });
    }
}
