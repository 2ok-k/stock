<x-app>
    <div class="card mt-2 mb-2">
        <div class="card-header">
            <h4>New user</h4>
        </div>
        <div class="card-body">
            <br>
            <div class="container form-group">
                <form action="/users" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control" name="email" -id="email"
                        placeholder="Enter email" value="{{ old('email') }}">
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div><br>
                    <div class="form-group">
                        <select name="role_id" id="role_id" class="form-control">
                            <option value="">-- select --</option>
                            @foreach ($roles as $role)
                                <option value="{{ $role->id }}">{{ $role->name }}</option>
                            @endforeach
                        </select>
                    </div><br>
                    <div class="form-group">
                        <input type="text" class="form-control" name="name" id="name"
                        placeholder="Enter name" value="{{ old('name') }}">
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div><br>
                    <div class="form-group">
                        <input type="password" class="form-control" name="password" id="password"
                        placeholder="Enter password" value="{{ old('password') }}">
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div><br>
                    <div class="form-group">
                        <input type="password" class="form-control" name="password_confirmation" id="password_confirmation"
                        placeholder="Confirm password" value="{{ old('password_confirmation') }}">
                        @error('password_confirmation')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div><br>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="/users" class="btn btn-secondary">
                        cancel
                    </a>
                </form>
            </div>
        </div>
    </div>
</x-app>