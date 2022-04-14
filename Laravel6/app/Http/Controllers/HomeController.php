<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Index()
    {
        $title = 'Menu de opciones en el home';

        return View('/Home/index', compact('title'));
    }

}
