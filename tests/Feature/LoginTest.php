<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Database\Eloquent\Factories\Factory;
use PHPUnit\Framework\TestCase;

class LoginTest extends TestCase
{
    public function loginWithWrongCredentials()
    {
        $this->visit('/')
            ->see('Login')
            ->type('unknown@example.org', 'email')
            ->type('invalid-password', 'password')
            ->check('remember')
            ->press('Login')
            ->seePageIs('/login')
            ->see('These credentials do not match our records');
    }
}
