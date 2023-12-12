@extends('clase-2.layouts.layout-clase-2')
@push('css')
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />    
@endpush

@section('title', 'Index Clase 7')
@section('content')
    @include('clase-5._partials.session')

    <h1 class="text-green-500">Index - Clase 7</h1>

    @forelse ($products as $product)
        <div class="mt-4 border p-4">
            <p>{{ $product->name }}</p>
            <p>{{ $product->short_description }}</p>
            <p>S/{{ number_format($product->price, 2) }}</p>
        </div>
    @empty
        <p>No hay productos...</p>        
    @endforelse
@endsection