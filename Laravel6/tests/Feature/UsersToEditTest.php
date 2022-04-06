<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UsersToEdit extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @test
     */
    function it_loads_users_to_edit_page()
    {
        $this->get('/usuarios/6/edit')
            ->assertStatus(200)
            ->assertSee('El usuario a editar es: 6');
    }
    function it_loads_user_to_edit_page_error() {
        $this->get('/usuarios/texto/edit')
            ->assertStatus(404)
            ->assertSee('jaja');
    }
}
