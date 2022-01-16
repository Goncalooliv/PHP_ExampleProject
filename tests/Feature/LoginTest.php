<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Database\Eloquent\Factories\Factory;
use PHPUnit\Framework\TestCase;

class LoginTest extends TestCase
{
    public function test_login()
    {
        $user = User::factory()->create();

        $responde = $this->actingAs($user)->withSession(['foo' => 'bar'])->get('/home');
    }
}
