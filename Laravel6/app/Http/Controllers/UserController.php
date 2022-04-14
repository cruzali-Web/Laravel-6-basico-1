<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() 
    {
        if (request()->has('empty')) {
            $users = [];
        } else {
            $users = [
                'Sara', 
                'Abraham',
                'Ali',
                'Tania',
                'Belen'
            ];
        }

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
        
        return View('users.index', compact('title', 'users'));
    }

    public function show($id)
    {
        return View('users/details', compact('id'));
    }

    public function create()
    {
        $userType = 'Admin';

        return View('users/create', compact('userType'));
    }

    public function edit($id)
    {
        return View('/users/edit', compact('id'));
    }
}
