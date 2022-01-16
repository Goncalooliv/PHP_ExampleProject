<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Database\Eloquent\Factories\Factory;
use Tests\TestCase;
use App\Models\User;

class RegisterTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_Register()
    {
        $response= $this->post('register',[
            'name' => 'Gonçalo',
            'email' => 'example@example.com',
            'morada'=> 'Praça de 9 de Abril 349',
            'zipcode'=> '4249-004',
            'tipo'=> 'Candidato',
            'phoneNumber'=> '123456789',
            'password'=> 'password',
        ]);
        $response->assertRedirect('/');
    }
}
