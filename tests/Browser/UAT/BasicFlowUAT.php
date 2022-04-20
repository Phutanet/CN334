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

    //user สามารถสร้าง task ได้
    //user สามารถแก้ไข task ได้
    //user สามารถลบ task ได้
}
