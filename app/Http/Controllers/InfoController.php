<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\InfoRequest;
use App\Models\Info;

class InfoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $infos = Info::all();

        return view('clase-13.index', compact('infos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('clase-13.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(InfoRequest $request)
    {   
        /* guardar el archivo en carpeta */
        $image_name = time() . '.' . $request->file_uri->extension(); // crea un nombre único para el archivo; ejemplo: 1707191120.jpg
        // $request->file_uri->move(public_path('images'), $image_name); // guarda el archivo en el directorio público en una carpeta 'images'
        $request->file_uri->storeAs('public/images', $image_name); // guarda el archivo en storage en una carpeta 'images' y es accesible desde el storage link en public

        /* guardar el registro en la bbdd */
        $info = new Info();
        $info->name     = $request->file_name;
        $info->file_uri = $image_name;
        $info->save();

        return redirect()->route('clase-13.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
