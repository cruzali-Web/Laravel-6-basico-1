<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class WelcomeUsersTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @test
     */

     function it_welcomes_users_with_nickname() {
         $this->get('saludo/ali/sk11per')
            ->assertStatus(200)
            ->assertSee('Bienvenido Ali, tu apodo es sk11per');

     
    }

    /** @test */
    function it_welcome_users_without_nickname() {
        $this->get('saludo/ali')
        ->assertStatus(200)
        ->assertSee('Bienvenido Ali, no tienes apodo');

    }

}
