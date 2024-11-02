<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

class PostForm extends Form
{
    #[\Livewire\Attributes\Rule(['required','min:3','max:255'])]
    public string $title = '';

    #[\Livewire\Attributes\Rule(['required'])]
    public string $body = '';


    public function store(): void
    {
        $user = \App\Models\User::find(1);


         $user->posts()->create($this->validate());
         $this->reset();

         flash('Post created successfully', 'success');
    }

}
