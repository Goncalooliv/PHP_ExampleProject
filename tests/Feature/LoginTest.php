<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LoginTest extends TestCase
{
   public function test_login(){
       $response = $this->post('login',[
           'email'=>'38600@ufp.edu.pt',
           'password'=>'12345678',
       ]);
       $response->assertRedirect('/home');
   }
}
