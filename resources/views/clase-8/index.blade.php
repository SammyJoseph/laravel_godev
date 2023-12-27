@extends('clase-2.layouts.layout-clase-2')
@push('css')
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />    
@endpush

@section('title', 'Relaciones Clase 8')
@section('content')
    @include('clase-5._partials.session')

    <h1 class="text-green-500">Relaciones - Clase 8</h1>

    <div class="grid grid-cols-2 gap-2 mt-4">
        <div class="border border-red-300 p-4">
            @forelse ($users as $user)
                <div>
                    <p><span class="font-bold">Nombre: </span>{{ $user->name }}</p>
                    <p><span class="font-bold">Email: </span>{{ $user->email }}</p>
                    <p><span class="font-bold">Teléfono: </span>+{{ $user->phone->prefix }} {{ $user->phone->number }}</p>
                    <p><span class="font-bold">Sim: </span><span class="capitalize">{{ $user->phoneSim->company }}</span></p>

                    <p><span class="font-bold">Direcciones:</span></p>
                    <ul>
                        @forelse ($user->addresses as $address)
                            <li class="list-disc list-inside">{{ $address->direction }}, <span class="text-gray-500">{{ $address->city }}</span></li>
                        @empty
                            <li>No hay una dirección...</li>
                        @endforelse
                    </ul>

                    <p><span class="font-bold">Pisos:</span></p>
                    <ul>
                        @forelse ($user->addressFloor as $floor)
                            <li class="list-disc list-inside">Piso #{{ $floor->number }} <span class="text-gray-500">({{ $floor->address->direction }})</span></li>
                        @empty
                            <li>No hay un piso...</li>   
                        @endforelse
                    </ul>

                    <p><span class="font-bold">Roles:</span></p>
                    <ul>
                        @forelse ($user->roles as $role)
                            <li class="list-disc list-inside">{{ $role->name }}</li>
                        @empty
                            <li>No hay un rol...</li>
                        @endforelse
                    </ul>     
                    
                    <p><span class="font-bold">Imagen:</span></p>
                    @if ($user->image)
                        <div class="w-64">
                            <img src="{{ $user->image->url }}" alt="user image">
                        </div>
                    @else
                        <p>No hay una imagen...</p>
                    @endif
                </div>
            @empty
                <p>No hay usuarios...</p>      
            @endforelse
        </div>
        <div class="border border-blue-300 p-4">
            <p><span class="font-bold">Posts:</span></p>
            <ul>
                @forelse ($posts as $post)
                    <li class="list-disc list-inside">{{ $post->title }}</li>
                    <ul class="ml-6">
                        @forelse ($post->tags as $tag)
                            <li class="list-decimal list-inside">{{ $tag->name }}</li>
                        @empty
                            <li>No hay tags...</li>
                        @endforelse
                    </ul>
                @empty
                    <li>No hay posts...</li>
                @endforelse
            </ul>
        </div>
    </div>
@endsection