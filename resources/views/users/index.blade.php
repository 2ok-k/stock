<x-app>
    <div class="d-flex justify-content-between mt-2 mb-2">
        <h4>Users</h4>
        <a href="/users/create" class="btn btn-success">create new user</a>
    </div>
    <hr>
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">Email</th>
            <th scope="col">Name</th>
            <th scope="col">Role</th>
            <th scope="col">Permissions</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        @foreach ($users as $user)
            <tbody>
                <tr>
                    <td>{{$user->email}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->role->name}}</td>
                    <td>
                        <ul>
                            @foreach ($user->role->permissions as $permission)
                                <li>
                                    {{ $permission->name }}
                                </li>
                            @endforeach
                        </ul>
                    </td>
                    <td>
                        <a href="/users/{{ $user->id }}/edit" class="btn btn-dark">
                            Edit
                        </a>
                        <a class="btn btn-info" href="/users/{{ $user->id }}/password">
                            change password
                        </a>
                        <form action="/users/{{ $user->id }}" method="post" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">
                                delete
                            </button>
                        </form>
                    </td>
                </tr>
            </tbody>
        @endforeach
    </table>
</x-app>