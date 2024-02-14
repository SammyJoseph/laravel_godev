@extends('clase-2.layouts.layout-clase-2')

@section('title', 'Welcome - Clase 14')
@section('content')
    <h1>Welcome - Clase 14</h1>
    <hr class="my-3">

    <p class="mb-2 capitalize">{{ __('welcome.choose') }}:</p>
    {{-- @foreach (Config::get('languages') as $lang =>$language)
        @if ($lang != App::getLocale()) // solo listar los lenguajes diferentes al seleccionado
            <a href="{{ route('clase-14.switchlang', $lang) }}">{{ $language }}</a>
        @endif
    @endforeach --}}

	<div class="flex flex-row items-center right-1 mb-4 space-x-2">
        @foreach (Config::get('languages') as $lang =>$language)
                <a href="{{ route('clase-14.switchlang', $lang) }}" class="{{ Session()->get('applocale') == $lang ? 'bg-green-200' : '' }} p-2 flex flex-row items-center border border-gray-300 text-sm font-medium text-gray-700 hover:bg-gray-100 focus:bg-gray-200 focus:outline-none">
                    <span class="text-md">{{ $language }}</span>
                    <span class="ml-1">
                        @switch($language)
                            @case('English')
                                <img src="https://img.icons8.com/?size=48&id=aRiu1GGi6Aoe&format=png" class="w-5 h-5" />
                                @break
                            @case('Español')
                                <img src="https://img.icons8.com/?size=48&id=ly7tzANRt33n&format=png" class="w-5 h-5" />                                
                                @break
                            @case('Française')
                                <img src="https://img.icons8.com/?size=48&id=3muzEmi4dpD5&format=png" class="w-5 h-5" />                                
                                @break
                            @default
                                <img src="https://img.icons8.com/?size=48&id=63766&format=png" class="w-5 h-5" />
                        @endswitch
                    </span>
                </a>
        @endforeach
	</div>

    <p class="capitalize">{{ $message }}</p>
    <p class="capitalize">{{ $greeting }}</p>    
@endsection