<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Empresas;

class CreateAnnouncementTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_AnnouncementCreation()
    {
        $response=$this->post('login',[
            'email'=>'microsoftrct@microsoft.com',
            'password'=>'password',
        ]);
        $response->assertRedirect('/home');

        $response=$this->post('/anuncios/create',[
            'nome_empresa' => 'nintendo',
            'posicao'=> 'eCommerce Administrator',
            'categoria'=> 'Administracao',
            'pais'=> 'Alemanha',
            'distrito'=> 'Frankfurt',
            'requisitos'=> 'Degree in Business Administration or comparable experiences.
            Profound knowledge of eCommerce business operating processes.
            Solid work experience with back-office administrative tools such as web publishing CMS and/or eCommerce operating systems.',
            'tipo'=> 'Full-Time',
            'contacto'=> 'nintendorct@nintendo.com',
        ]);
        $response->assertRedirect('/anuncios');
    }
}
