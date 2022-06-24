<x-app>
    <div class="card">
        <div class="card-header">New Track for item : {{  $item-> name }}</div>
        <div class="card-body">
            <br>
            <div class="container form-group">
                <form action="/items/{{ $item->id }}/tracks" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" name="type" value="in" id="typeIn">
                        <label for="typeIn" class="form-check-label">in</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" name="type" value="out" id="typeOut">
                        <label for="typeOut" class="form-check-label">out</label>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="quantity">quantity</label>
                        <input type="text" name="quantity" id="quantity" placeholder="Enter quantity" 
                        class="form-control" value="">
                    </div><br>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</x-app>