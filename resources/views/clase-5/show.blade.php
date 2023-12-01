@extends('clase-2.layouts.layout-clase-2')
@push('css')
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
@endpush

@section('title', 'Show Clase 5')
@section('content')
    <h1 class="text-green-500">Show - Clase 5</h1>
    <div class="mt-8">
        <a href="{{ route('clase-5.index') }}"
            class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">
            Volver
        </a>
    </div>

    <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 mt-16">
        <svg xmlns="http://www.w3.org/2000/svg"
            class="icon icon-tabler icon-tabler-notes w-7 h-7 text-gray-500 dark:text-gray-400 mb-3" viewBox="0 0 24 24"
            stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <path d="M5 3m0 2a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v14a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2z" />
            <path d="M9 7l6 0" />
            <path d="M9 11l6 0" />
            <path d="M9 15l4 0" />
        </svg>

        <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">{{ $note->title }}</h5>
        <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">{{ $note->description }}</p>
        <div class="inline-flex items-center text-blue-600">
            {{ $note->author }}
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-edit w-4 h-4 ms-2.5 rtl:rotate-[270deg] ml-1"
                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round"
                stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                <path d="M6 21v-2a4 4 0 0 1 4 -4h3.5" />
                <path d="M18.42 15.61a2.1 2.1 0 0 1 2.97 2.97l-3.39 3.42h-3v-3l3.42 -3.39z" />
            </svg>
        </div>
    </div>
@endsection
