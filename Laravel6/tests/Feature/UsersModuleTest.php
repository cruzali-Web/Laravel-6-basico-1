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
    function it_shows_the_users_list()
    {


        $this->get('/usuarios')
            ->assertStatus(200)
            ->assertSee('Listado de usuarios')
            ->assertSee('Sara')
            ->assertSee('Abraham');
    }

    /*
    * @test
    */
   function it_loads_default_message_if_the_user_list_is_empty()
   {
       $this->get('/usuarios?empty')
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
            ->assertSee('Tipo de usuario: ');
    }

    /** @test */
    function it_shows_default_message_if_there_are_no_users()
    {
        $this->get('/usuarios?empty')
            ->assertStatus(200)
            ->assertSee('No hay usuarios registrados.');
    }
}