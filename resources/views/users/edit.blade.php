<x-app>
    <br>
    <div class="card">
        <div class="card-header">
            <h4>Edit user</h4>
        </div>
        <div class="card-body">
            <br>
            <div class="container form-group">
                <form action="/users/{{ $user->id }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                        <input type="text" class="form-control" name="email" -id="email"
                        placeholder="Email" value="{{ $user->email }}">
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
                                <option value="{{ $role->id }}" {{ $role->id == $user->role_id ? 'selected' : ''}}>{{ $role->name }}</option>
                            @endforeach
                        </select>
                    </div><br>
                    <div class="form-group">
                        <input type="text" class="form-control" name="name" id="name"
                        placeholder="Enter name" value="{{ old('name',$user->name) }}">
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div><br>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="/users" class="btn btn-secondary">cancel</a>
                </form>
            </div>
        </div>
    </div>
</x-app>