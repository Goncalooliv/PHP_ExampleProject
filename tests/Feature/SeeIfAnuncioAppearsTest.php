<?php

namespace Tests\Feature;

use Illuminate\Support\Facades\Response;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SeeIfAnuncioAppearsTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_SeeIfAnuncioAppears()
    {
        $this->get('/anuncios')->assertSee('Microsoft');
        $this->get('/anuncios')->assertSee('USA');
    }
}
