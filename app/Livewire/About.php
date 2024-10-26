<?php

namespace App\Livewire;

use Livewire\Component;
Use Livewire\Attributes\Title;

#[Title('about')]

class About extends Component
{
    public function render()
    {
        return view('livewire.about');
    }
}
