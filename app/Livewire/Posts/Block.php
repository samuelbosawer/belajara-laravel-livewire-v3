<?php

namespace App\Livewire\Posts;

use Livewire\Component;
use App\Models\Post;

class Block extends Component
{


    public Post $post;

    public function render()
    {
        return view('livewire.posts.block');
    }
}
