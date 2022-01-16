<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DeleteAnnouncement extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_DeleteAnnouncement(){
        
        $response=$this->post('login',[
            'email'=>'38600@ufp.edu.pt',
            'password'=>'12345678',
        ]);
        $response->assertRedirect('/home');

        $response=$this->post('anuncios/destroy/',[
            
        ]);
    }
    
}
