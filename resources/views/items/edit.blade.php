<x-app>
    <div class="card">
        <div class="card-header">Edit Item</div>
        <div class="card-body">
            <br>
            <div class="container form-group">
                <form action="/items/{{$item->id}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('patch')
                    <div class="form-group">
                        <input type="text" class="form-control" id="name" 
                        name="name" placeholder="Enter name" value="{{ $item-> name }}">
                    </div><br>
                    <div class="form-group">
                        <input type="text" name="total" id="total" placeholder="Enter total" 
                        class="form-control" value="{{ $item-> total }}">
                    </div><br>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="/items" class="btn btn-secondary">cancel</a>
                </form>
            </div>
        </div>
    </div>
</x-app>
        