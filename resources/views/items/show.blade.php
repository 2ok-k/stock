<x-app>
    <div class="card">
        <div class="card-header">Show item</div>
        <div class="card-body">
            <label for="">Name:</label>
            <input type="text" value="{{$item-> name}}" readonly class="form-control-plaintext">
            <label for="">Total:</label>
            <input type="text" value="{{$item-> total}}" readonly class="form-control-plaintext">
        </div>
    </div>
    <br>
    <a href="/items/{{ $item->id }}/tracks/create" class="btn btn-success">Create new track</a>
    <a href="/items" class="btn btn-secondary">Back to list</a><br>
    <table class="table">
        <thead>
            <tr>
              <th scope="col">Date</th>
              <th scope="col">Type</th>
              <th scope="col">Quantity</th>
              <th scope="col">Actions</th>
            </tr>
          </thead>
        <tbody>
            @foreach ($item->tracks as $track)
                <tr>
                    <td>{{ $track -> created_at}}</td>
                    <td>{{ $track -> type}}</td>
                    <td>{{ $track -> quantity}}</td>
                    <td>
                        <form method="post" action="/tracks/{{ $track-> id }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">
                                delete
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-app>
        