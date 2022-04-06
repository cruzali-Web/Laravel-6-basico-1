<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UsersModuleTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @test
     */
    function user()
    {
        $response = $this->get('/');

        $response->assertStatus(200);

        $this->get('/usuarios')
            ->assertStatus(200)
            ->assertSee('Listado de usuarios');
    }
    /** @test */
    function it_loads_the_user_details_page() {
        $this->get('/usuarios/5')
            ->assertStatus(200)
            ->assertSee('Mostrando detalles del usuario 5');
    }

    
    function test_it_loads_the_new_user_page() {

        $this->withoutExceptionHandling();



        $this->get('/usuarios/nuevo')
            ->assertStatus(200)
            ->assertSee('Crear nuevo usuario');

    }
}
