@extends('clase-2.layouts.layout-clase-2')
@push('css')
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />    
@endpush

@section('title', 'One to One Clase 8')
@section('content')
    @include('clase-5._partials.session')

    <h1 class="text-green-500">One to One - Clase 8</h1>

    @forelse ($users as $user)
        <div class="mt-4 border p-4">
            <p><span class="font-bold">Nombre: </span>{{ $user->name }}</p>
            <p><span class="font-bold">Email: </span>{{ $user->email }}</p>
            <p><span class="font-bold">Teléfono: </span>+{{ $user->phone->prefix }} {{ $user->phone->number }}</p>
        </div>
    @empty
        <p>No hay usuarios...</p>        
    @endforelse
@endsection