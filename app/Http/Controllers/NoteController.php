<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $notes = Note::all();

        return view('clase-5.index', compact('notes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('clase-5.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
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
    public function show(Note $note): View
    {
        return view('clase-5.show', compact('note'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Note $note): View
    {
        return view('clase-5.edit', compact('note'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Note $note): RedirectResponse
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
    public function destroy(Note $note): RedirectResponse
    {
        $note->delete();

        return redirect()->route('clase-5.index');
    }
}
