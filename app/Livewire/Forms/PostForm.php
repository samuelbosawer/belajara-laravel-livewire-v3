<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class PostForm extends Form
{

    #[\Livewire\Attributes\Rule(['required'])]
    public string $body = '';

    public function store()
    {
        $post =  Auth::user()->posts()->create($this->validate());


        flash('Post created successfully', 'success');

        return $post;

}

}
