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
            <p><span class="font-bold">Sim: </span><span class="capitalize">{{ $user->phoneSim->company }}</span></p>

            <p><span class="font-bold">Direcciones:</p>
            <ul>
                @forelse ($user->addresses as $address)
                    <li class="list-disc list-inside">{{ $address->direction }}, <span class="text-gray-500">{{ $address->city }}</span></li>
                @empty
                    <li>No hay una dirección...</li>
                @endforelse
            </ul>

            <p><span class="font-bold">Pisos:</p>
            <ul>
                @forelse ($user->addressFloor as $floor)
                    <li class="list-disc list-inside">Piso #{{ $floor->number }} <span class="text-gray-500">({{ $floor->address->direction }})</span></li>
                @empty
                    <li>No hay un piso...</li>   
                @endforelse
            </ul>

            <p><span class="font-bold">Roles:</p>
            <ul>
                @forelse ($user->roles as $role)
                    <li class="list-disc list-inside">{{ $role->name }}</li>
                @empty
                    <li>No hay un rol...</li>
                @endforelse
            </ul>            
        </div>
    @empty
        <p>No hay usuarios...</p>      
    @endforelse    
@endsection