{{-- @extends('clase-2.layouts.layout-clase-2')

@section('title', 'Index - Clase 17')
@section('content')
    <h1 class="text-blue-500 mb-4">Hello world</h1>
    <div>
        <a href="{{ route('clase-17-2.download') }}" class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
            Descargar PDF
        </a>
    </div>
@endsection --}}
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Clase 17</title>
</head>
<body>
    <h2>Hola mundo</h2>
    <a href="{{ route('clase-17-2.download') }}">Descargar</a>
</body>
</html>