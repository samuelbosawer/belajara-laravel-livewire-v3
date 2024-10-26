<?php

namespace App\Livewire;

use Livewire\Component;
Use Livewire\Attributes\Title;

#[Title('Contact')]

class Contact extends Component
{
    public function render()
    {
        return view('livewire.contact');
    }
}
