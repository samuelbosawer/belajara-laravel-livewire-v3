<div class="">

<x-flash-message/>
    <div class="card">
        <div class="card-body">
            {{-- <h5 class="card-title">
                New Post
            </h5> --}}

            <form action="" wire:submit="save">

                <div class="mb-2">
                    <label for="body" class="form-label visually-hidden">Body</label>

                    <textarea wire:model="form.body" placeholder="What's on your mind ?" class="form-control" id=body ></textarea>

                    @error('form.body')
                        <small class="text-danger d-block mt-1">{{ $message }}</small>
                    @enderror
                </div>
                <button class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>


    {{-- Do your work, then step back. --}}
</div>
