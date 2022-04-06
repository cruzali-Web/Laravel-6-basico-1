<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeUserController extends Controller
{
    public function userWithNickName($name, $nickname = null)
    {
        $name = ucfirst($name);

        return "Bienvenido {$name}, tu apodo es {$nickname}";
    }

    public function userWithOutNickName($name)
    {
        $name = ucfirst($name);
        
        return "Bienvenido {$name}, no tienes apodo";
    }
}