<div>
   <div class="card">
        <div class="card-body">
            <h5 class="card-title">
                Login
            </h5>
            <form wire:submit="login" >
                <div class="mb-4">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" wire:model="form.email" class="form-control" name="email" id="email">
                    @error('form.email')
                        <small class="d-block mt-1 text-danger">
                            {{$message}}
                        </small>

                    @enderror
                </div>

                <div class="mb-4">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" wire:model="form.password" class="form-control" name="password" id="password">
                    @error('form.password')
                        <small class="d-block mt-1 text-danger">
                            {{$message}}
                        </small>

                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
   </div>
</div>
