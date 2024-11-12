<div class="row">
    <div class="col-md-6">
        <livewire:posts.create>
    </div>

    <div class="col-md-6">
        @foreach ($posts as $post )
          @livewire('posts.block', ['post' => $post], key($post->id))

        @endforeach
    </div>
</div>
