<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use PHPUnit\Framework\TestCase;

class LoginTest extends TestCase
{
    public function test_login()
    {
        $user = factory(User::class)->create();

        $responde = $this->actingAs($user)->withSession(['foo' => 'bar'])->get('/home');
    }
}
