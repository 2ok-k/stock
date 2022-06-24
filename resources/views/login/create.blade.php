<x-app>
    <form method="POST" action="/login">
        @csrf
        <div class="form-group">
            <label class="form-label" for="email">Email address</label>
            <input type="text" id="email" name="email" 
                class="form-control" value="{{ old('email') }}" @error('email') is-valid @enderror>
            @error('email')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="form-group">
            <label class="form-label" for="password">Password</label>
            <input type="password" id="password" name="password" class="form-control"/>
        </div><br>
        <button type="submit" class="btn btn-primary">Sign in</button>
    </form>
</x-app>