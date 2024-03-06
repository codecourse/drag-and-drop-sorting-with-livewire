<?php

namespace App\Livewire;

use App\Models\Link;
use Livewire\Component;

class Links extends Component
{
    public function render()
    {
        return view('livewire.links', [
            'links' => auth()->user()->links()->ordered()->get()
        ]);
    }
}