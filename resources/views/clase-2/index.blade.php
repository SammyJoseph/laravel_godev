{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Index Clase 2</h1>
</body>
</html> --}}

{{-- Ahora se extiende la plantilla que incluye la estructura HTML --}}
@extends('clase-2.layouts.layout-clase-2')

{{-- Variables @yield de la plantilla extendida --}}
@section('title', 'Index Clase 2')
@section('content')
    <h1>Index Clase 2</h1>
@endsection