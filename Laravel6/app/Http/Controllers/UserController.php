<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() 
    {
        $users = [
            'Sara', 
            'Abraham',
            'Ali',
            'Tania',
            'Belen'
        ];

        $title = 'Listado de usuarios';

        // return View('users', [
        //     'users' => $users,
        //     'title' => "Listado de usuarios"
        // ]);

        // return View('users')->with([
        //     'users' => $users,
        //     'title' => "Listado de usuarios"
        // ]);

        // return View('users')
        //     ->with('users', $users)
        //     ->with('title', 'Listado de usuarios');

        //dd(compact('title', 'users'));
        
        return View('users', compact('title', 'users'));
    }

    public function show($id)
    {
        return "Mostrando detalles del usuario {$id}";
    }

    public function create()
    {
        return "Crear nuevo usuario";
    }

    public function edit($id)
    {
        return "El usuario a editar es: {$id}";
    }
}
