@extends('clase-2.layouts.layout-clase-2')
@push('css')
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />    
@endpush

@section('title', 'Index Clase 5')
@section('content')
    <h1 class="text-green-500">Index - Clase 5</h1>
    <div class="mt-8">
        <a href="{{ route('clase-5.create') }}" class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">
            Crear Nota
        </a>
    </div>
    <ul class="mt-8">
        @forelse ($notes as $note)
            <li class="flex space-x-2 items-center mb-2">
                <span>{{ $note->title }}</span>
                <span class="text-gray-500 text-sm">{{ $note->author }}</span>

                @if ($note->done)
                    <span class="material-symbols-outlined">check_box</span>
                @else
                    <span class="material-symbols-outlined">check_box_outline_blank</span>
                @endif

                <a class="text-sm text-blue-400 italic" href="{{ route('clase-5.edit', $note) }}">Editar</a>
            </li>
        @empty
            <li class="italic text-gray-500">No se registraron notas</li> 
        @endforelse
    </ul>
@endsection