<?php

namespace Tests\Feature;

use Illuminate\Support\Facades\Response;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SeeIfTeamAppears extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_SeeIfTeamAppears()
    {
        $this->get('/developteam')->assertSee('Gonçalo Oliveira');
        $this->get('/developteam')->assertSee('38600');
        $this->get('/developteam')->assertSee('GitHub');
        $this->get('/developteam')->assertSee('Instagram');
        $this->get('/developteam')->assertSee('Facebook');
    }
}
