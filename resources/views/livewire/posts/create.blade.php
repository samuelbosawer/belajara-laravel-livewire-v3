<div class="card">

    <div class="card-body">
        <h5 class="card-title">
            New Post
        </h5>

        <form action="" wire:submit="save">
            <div class="mb-4">
                <label for="title" class="form-label">Title</label>

                <input id="title" wire:model="title" class="form-control" >

                @error('title')
                <small class="text-danger d-block mt-1">{{$message}}</small>


                @enderror
            </div>
            <div class="mb-4">
                <label for="body" class="form-label">Body</label>

                <textarea wire:model="body" class="form-control" id=body rows="3"></textarea>

                @error('body')
                <small class="text-danger d-block mt-1">{{$message}}</small>

                @enderror
            </div>
            <button class="btn btn-primary">Save</button>
        </form>
    </div>
    {{-- Do your work, then step back. --}}
</div>
