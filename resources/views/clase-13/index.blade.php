@extends('clase-2.layouts.layout-clase-2')
@push('css')
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />    
@endpush

@section('title', 'Index Clase 13')
@section('content')
    <div class="flex justify-between">
        <h2 class="font-bold text-2xl">Lista de registros</h2>
        <a href="{{ route('clase-13.create') }}" class="py-2.5 px-5 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 uppercase flex items-center">
            Crear nuevo registro
            <svg class="w-4 ml-1" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960"><path d="M440-280h80v-160h160v-80H520v-160h-80v160H280v80h160v160Zm40 200q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q134 0 227-93t93-227q0-134-93-227t-227-93q-134 0-227 93t-93 227q0 134 93 227t227 93Zm0-320Z"/></svg>
        </a>
    </div>
    <ul>
        @forelse ($infos as $info)
            <li>
                {{ $info->name }}
                <img class="max-w-sm" src="{{ url('storage/images/' . $info->file_uri) }}" alt="{{ $info->name }}"> {{-- ejemplo: http://127.0.0.1:8000/images/1707192035.svg --}}
            </li>
            <hr class="my-2">
        @empty
            <li>No hay registros en la base de datos</li>
        @endforelse
    </ul>
@endsection