<?php

namespace App\Http\Controllers;

use App\Http\Requests\NoteApiRequest;
use App\Http\Resources\NoteApiResource;
use App\Models\NoteApi;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\JsonResource;

class NoteApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():JsonResource
    {
        $notes = NoteApi::all();

        // return response()->json($notes, 200);

        // return new NoteApiResource(); // cuando se retorna un recurso único
        return NoteApiResource::collection($notes); // cuando se retorna una colección
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // no se utiliza en API
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(NoteApiRequest $request):JsonResponse
    {
        $note = NoteApi::create($request->all());

        return response()->json([
            'success'   => true,
            // 'data'      => $note // por convención se devuelve el recurso creado
            'data'      => new NoteApiResource($note) // se usa new cuando se retorna un recurso único (no una colección)
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id):JsonResource // no utilizar NoteApi $note como en un controlador normal (usar find($id))
    {
        $note = NoteApi::find($id);
        // return response()->json($note, 200);
        return new NoteApiResource($note);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // no se utiliza en API
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(NoteApiRequest $request, $id):JsonResponse
    {
        $note = NoteApi::find($id);
        $note->update($request->all());

        return response()->json([
            'success'   => true,
            // 'data'      => $note // por convención se devuelve el recurso actualizado
            'data'      => new NoteApiResource($note),
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id):JsonResponse
    {
        $note = NoteApi::find($id);
        $note->delete();

        return response()->json([
            'success' => true,
        ], 200);
    }
}
