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
        ModelsNote::create([
            "title"         => $this->title,
            "description"   => $this->description,
            "author"        => $this->author,
            "done"          => $this->done,
        ]);

        $this->message = "La nota se creó con éxito";
        $this->reset('title', 'description', 'author', 'done');
    }
}
