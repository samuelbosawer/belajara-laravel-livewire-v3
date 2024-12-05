<?php

namespace App\Livewire\Posts;

use Livewire\Component;
use Livewire\Attributes\On;
use Livewire\Attributes\Title;
use App\Models\Post;
use Livewire\Attributes\Lazy;

#[Title('Lazy')]

// #[Title('Posts')]

class Index extends Component
{

    #[On('postCreated')]

    public function updatedList($post) {}

    public function placeholder()
    {
        // return  <<<BLADE
        //      <div class="p-3">
        //     Loading ....
        //         </div>
        // BLADE;
        return view('livewire.posts.placeholder');

    }


    public function render()
    {

        sleep(3);
        return view(
            'livewire.posts.index',
            ['posts' => Post::query()->latest()->get()]
        );
    }
}
