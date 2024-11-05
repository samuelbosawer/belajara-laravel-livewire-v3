<?php

namespace App\Livewire;

use Livewire\Component;


#[\Livewire\Attributes\Layout('layouts.guest')]

class Login extends Component
{

    public \App\Livewire\Forms\LoginForm $form;


    public function login()
    {
        $this->form->store();
    }

    public function render()
    {
        return view('livewire.login');
    }
}
