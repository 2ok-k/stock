<x-app>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="card mt-2 mb-2">
        <div class="card-header">New Item</div>
        <div class="card-body">
            <br>
            <div class="container form-group">
                <form action="/items" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control" name="name" 
                        placeholder="Enter name" value="{{ old('name') }}">
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <br>
                    <div class="form-group">
                        <input type="text" name="total" id="" placeholder="Enter total" 
                        class="form-control" value="{{ old('name') }}">
                    </div><br>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</x-app>