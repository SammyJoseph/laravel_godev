<?php

namespace App\Http\Controllers;

use App\Http\Requests\NoteApiRequest;
use App\Models\Note;
use App\Models\NoteApi;
use Illuminate\Http\Request;

class NoteApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $notes = Note::all();

        return response()->json($notes, 200);
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
    public function store(NoteApiRequest $request)
    {
        Note::create($request->all());

        return response()->json([
            'success' => true
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(NoteApi $note)
    {
        return response()->json($note, 200);
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
    public function update(NoteApiRequest $request, NoteApi $note)
    {
        $note->update($request->all());

        return response()->json([
            'success' => true,
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(NoteApi $note)
    {
        $note->delete();

        return response()->json([
            'success' => true,
        ], 200);
    }
}
