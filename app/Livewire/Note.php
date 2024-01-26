<?php

namespace App\Livewire;

use App\Models\Note as ModelsNote;
use Livewire\Component;

class Note extends Component
{
    public $title = "";
    public $description = "";
    public $author = "";
    public $done = "";

    public $message = "";

    public function render()
    {
        $notes = ModelsNote::all();

        return view('livewire.note', compact('notes'));
    }

    public function store()
    {
        $validated = $this->validate([
            'title' => 'required|min:3',
            'description' => 'required|min:3',
            'author' => 'required|min:3',
            'done' => 'required|numeric|min:0|max:1',
        ]);

        ModelsNote::create($validated);

        /* ModelsNote::create([
            "title"         => $this->title,
            "description"   => $this->description,
            "author"        => $this->author,
            "done"          => $this->done,
        ]); */

        $this->message = "La nota se creó con éxito";
        $this->reset('title', 'description', 'author', 'done');
    }

    public function update(ModelsNote $note)
    {
        $validated = $this->validate([
            'title' => 'required|min:3',
            'description' => 'required|min:3',
            'author' => 'required|min:3',
            'done' => 'required|numeric|min:0|max:1',
        ]);

        $note->update($validated);

        /* $note->update([
            "title"         => $this->title,
            "description"   => $this->description,
            "author"        => $this->author,
            "done"          => $this->done,
        ]); */

        $this->reset('title', 'description', 'author', 'done');
        $this->message = "La nota se actualizó";
    }

    public function destroy(ModelsNote $note)
    {
        $note->delete();
        $this->message = "La nota se eliminó";
    }
}
