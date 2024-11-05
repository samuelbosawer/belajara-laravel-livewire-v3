<?php

namespace App\Livewire\Forms;

use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Livewire\Attributes\Validate;
use Livewire\Form;

class LoginForm extends Form
{
    #[\Livewire\Attributes\Rule(['required','email'])]
    public string $email = '';

    #[\Livewire\Attributes\Rule(['required'])]
    public string $password = '';


    public function store()
    {
        if(Auth::attempt($this->validate()))
        {
            return redirect()->route('home');
        };

        throw ValidationException::withMessages([
            'email' => 'Email tidak terdaftar'
        ]);
    }

}
