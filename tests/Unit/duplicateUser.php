<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class duplicateUser extends TestCase
{
    public function test_user_duplication()
    {
        $user1 = User::make([
            'name' => 'phutanet',
            'email' => 'ice.test1@gmail.com'
        ]);

        $user2 = User::make([
            'name' => 'phutanet',
            'email' => 'ice.test2@gmail.com'
        ]);
        
        $this->assertTrue($user1->email != $user2->email);
    }
}