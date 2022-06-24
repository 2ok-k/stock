<x-app>
    <div class="card mt-2 mb-2">
        <div class="card-header">New Employee</div>
        <div class="card-body">
            <br>
            <div class="container form-group">
                <form action="/employees" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" 
                            placeholder="Enter name" value="{{ old('name') }}">
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div><br>
                        <div class="form-group">
                            <label class="form-check-label" for="gender">
                                gender
                            </label>
                            <div class="form-check">
                                <label class="form-check-label" for="genderM">
                                    Male
                                </label>
                                <input class="form-check-input" type="radio" name="gender" id="genderM" value="M">
                            </div>
                            <div class="form-check">
                                <label class="form-check-label" for="genderF">
                                    Female
                                </label>
                                <input class="form-check-input" type="radio" name="gender" id="genderF" value="F">
                            </div>
                        </div><br>
                        <div class="form-group">
                            <label for="hobbies">
                                hobbies
                            </label><br>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label" for="music">music</label>
                                <input class="form-check-input" name="hobbies[]" 
                                    type="checkbox" id="music" value="music"
                                    @if (in_array('music',old('hobbies',[])))
                                        checked
                                    @endif>
                            </div>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label" for="sport">sport</label>
                                <input class="form-check-input" name="hobbies[]" type="checkbox" id="sport"
                                    value="sport" 
                                    @if (in_array('sport',old('hobbies',[])))
                                        checked
                                    @endif>
                            </div>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label" for="netflix">netflix</label>
                                <input class="form-check-input" name="hobbies[]" type="checkbox" id="netflix" 
                                    value="netflix"
                                    @if (in_array('netflix',old('hobbies',[])))
                                        checked
                                    @endif>
                            </div>
                        </div><br>
                        <div class="form-group">
                            <input type="date" class="form-control" name="created_at" 
                             id="created_at" value="{{ old('created_at') }}">
                        </div><br>
                        <div class="form-group">
                            <input type="file" class="form-control" name="photo" 
                             id="photo" value="{{ old('photo') }}">
                        </div><br>
                    </div><br>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</x-app>