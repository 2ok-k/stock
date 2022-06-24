<x-app>
    <br>
    <div class="card">
        <div class="card-header">
            <h4>Change password</h4>
        </div>
        <div class="card-body">
            <div class="container form-group">
                <form action="/users/{{ $user->id }}/password" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')

                    <label for="email">email</label>
                    <input type="text" class="form-control-plaintext" readonly value="{{ $user->email }}">

                    <label for="password">New password</label>
                    <input type="password" name="password" id="password"
                        class="form-control">
                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                    <label for="password_confirmation">Confirm password</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" 
                        class="form-control"><br>
                    
                    <button type="submit" class="btn btn-primary">
                        submit
                    </button>
                    <a href="/users" class="btn btn-secondary">
                        cancel
                    </a>
                </form>
            </div>
        </div>
    </div>
</x-app>