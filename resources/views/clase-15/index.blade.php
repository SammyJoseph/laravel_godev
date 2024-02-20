@extends('clase-2.layouts.layout-clase-2')

@section('title', 'Index - Clase 15')
@section('content')
    <h1 class="mb-4 text-3xl font-extrabold text-gray-900 dark:text-white md:text-4xl">
        <span class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400">Index -</span>
        Clase 15
    </h1>

    <a href="{{ route('clase-15.mail-me') }}" class="text-gray-900 bg-white hover:bg-gray-100 border border-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-gray-600 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:bg-gray-700 me-2 mb-2">
        <?xml version="1.0" ?>
        <svg class="w-5 mr-2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">

            <defs>

            <style>.cls-1{fill:#f19b5f;}.cls-2{fill:#ffce69;}.cls-3{fill:#ed960a;}.cls-4{fill:#6c2e7c;}</style>

            </defs>

            <g id="Icons">

            <rect class="cls-1" height="18" rx="3" width="22" x="1" y="3"/>

            <rect class="cls-2" height="13" rx="3" width="22" x="1" y="3"/>

            <path class="cls-3" d="M15.717,12.029l3.956-3.6a1,1,0,0,0-1.346-1.48L13.35,11.479a2.005,2.005,0,0,1-2.7,0L5.673,6.95A1,1,0,1,0,4.327,8.43l3.957,3.6L4.328,15.62A1,1,0,1,0,5.672,17.1l4.143-3.76a3.937,3.937,0,0,0,4.37,0l4.143,3.76a1,1,0,1,0,1.344-1.48Z"/>

            </g>

            <g data-name="Layer 4" id="Layer_4">

            <path class="cls-4" d="M20,2H4A4,4,0,0,0,0,6V18a4,4,0,0,0,4,4H20a4,4,0,0,0,4-4V6A4,4,0,0,0,20,2Zm2,16a2,2,0,0,1-2,2H4a2,2,0,0,1-2-2V6A2,2,0,0,1,4,4H20a2,2,0,0,1,2,2Z"/>

            <path class="cls-4" d="M19.74,7.017a1,1,0,0,0-1.413-.067L13.35,11.479a2.005,2.005,0,0,1-2.7,0L5.673,6.95A1,1,0,1,0,4.327,8.43l3.957,3.6L4.328,15.62A1,1,0,1,0,5.672,17.1l4.143-3.76a3.937,3.937,0,0,0,4.37,0l4.143,3.76a1,1,0,1,0,1.344-1.48l-3.955-3.591,3.956-3.6A1,1,0,0,0,19.74,7.017Z"/>

            </g>

        </svg>
        Enviar email
    </a>

    @if(session('mail_success'))
        <div id="toast-success" class="flex items-center w-full max-w-xs p-4 mb-4 text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800" role="alert">
            <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-green-500 bg-green-100 rounded-lg dark:bg-green-800 dark:text-green-200">
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                </svg>
                <span class="sr-only">Check icon</span>
            </div>
            <div class="ms-3 text-sm font-normal">{{ session('mail_success') }}</div>
            <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700" data-dismiss-target="#toast-success" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
            </button>
        </div>
    @endif
@endsection