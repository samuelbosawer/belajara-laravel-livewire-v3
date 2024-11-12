<?php

namespace App\Livewire\Posts;

use Livewire\Component;
use Livewire\Attributes\On;
Use Livewire\Attributes\Title;
use App\Models\Post;

#[Title('Posts')]

class Index extends Component
{

    #[On('postCreated')]

    public function updatedList($post)

    {

    }

    public function render()
    {
        return view('livewire.posts.index',
  ['posts' => Post::query()->latest()->get()]);
    }
}
