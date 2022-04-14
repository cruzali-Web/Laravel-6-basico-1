@extends('Shared/layout')


@section('content')

        <h1>{{ e($title) }} </h1>    

        <!-- @unless (empty($users))
        
        <ul>
            @foreach ($users as $user)       
                <li> {{ e($user) }} </li>
            @endforeach
        </ul>
        @else
            <p>No hay usuarios registrados</p>
        @endif -->


        <!-- --------------------- -->

        <!-- @empty($users)
            <p>No hay usuarios registrados.</p>
        @else
        <ul>
            @foreach ($users as $user)
                <li>{{ $user }} </li>
            @endforeach
        </ul>
        @endempty -->


        <ul>
            @forelse ($users as $user)
                <li>{{ $user }}</li>
            @empty
                <li>No hay usuarios registrados</li>
            @endforelse
        </ul>

    @endsection

    @section('sidebar')
        @parent
        <h2>Barra lateral personalizada</h2>
    @endsection