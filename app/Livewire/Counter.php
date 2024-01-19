<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $count = 0;
    public $username = '';

    public function mount() // mount es un hook que se ejecuta en cierta etapa (después del renderizado)
    {
        $this->fill(['count' => 20]);
    }

    public function render()
    {
        return view('livewire.counter');
    }

    public function increment()
    {
        $this->count++;
    }
}
