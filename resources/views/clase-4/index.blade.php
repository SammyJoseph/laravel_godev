{{-- <div>
    <p class="text-blue-500">hello world</p>
</div> --}}

@extends('clase-2.layouts.layout-clase-2')

@section('title', 'Index Clase 2')
@section('content')
    <h1 class="text-green-500">Index - Clase 4</h1>
    <ul>
        {{-- @foreach ($users as $user)
            <li class="mt-2">{{ $loop->iteration }}) {{ $user->name }} ({{ $user->age }}) - <span class="text-purple-500">{{ $user->email }}</span></li>
        @endforeach --}}
        {{ $users->name }} {{-- cuando se utiliza el método first() o find(), no se debe recorrer un foreach --}}
    </ul>
@endsection