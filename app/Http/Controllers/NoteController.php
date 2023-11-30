<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $notes = Note::all();

        return view('clase-5.index', compact('notes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('clase-5.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title'         => 'string|required|min:3|max:255',
            'description'   => 'string|required|min:3|max:255',
            'author'        => 'string|required|min:3|max:255',
            'done'          => 'required|boolean',
        ]);

        Note::create($validated);

        return redirect()->route('clase-5.index');
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
    public function edit(Note $note)
    {
        return view('clase-5.edit', compact('note'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Note $note)
    {
        $validated = $request->validate([
            'title'         => 'string|required|min:3|max:255',
            'description'   => 'string|required|min:3|max:255',
            'author'        => 'string|required|min:3|max:255',
            'done'          => 'required|boolean',
        ]);

        $note->update($validated);

        return redirect()->route('clase-5.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}