<x-app>
    <br>
    @can('create', App\Models\Item::class)
        <a href="/items/create" class="btn btn-success">create new item</a> 
    @endcan
    <hr>
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">Name</th>
            <th scope="col">Total</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        @foreach ($items as $item)
            <tbody>
                <tr>
                    <td>{{$item->name}}</td>
                    <td>{{$item->total}}</td>
                    <td>
                        @can('view', $item)
                            <a class="btn btn-primary" href="/items/{{ $item->id }}">View</a>
                        @endcan
                        @can('update', $item)
                            <a class="btn btn-info" href="/items/{{ $item->id }}/edit">Edit</a>
                        @endcan 
                        @can('delete', $item)
                            <form action="/items/{{ $item-> id }}" method="post" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <input type="submit" class="btn btn-danger"  value="delete">
                            </form>
                        @endcan
                    </td>
                </tr>
            </tbody>
        @endforeach
    </table>
</x-app>