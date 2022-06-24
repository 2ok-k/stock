<x-app>
    <br>
    <a href="/employees/create" class="btn btn-success">create new employee</a>
    <hr>
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">Name</th>
            <th scope="col">Gender</th>
            <th scope="col">Hobbie</th>
            <th scope="col">Phone</th>
            <th scope="col">started_at</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        @foreach ($employees as $employee)
            <tbody>
                <tr>
                    <td>{{ $employee->name }}</td>
                    <td>{{ $employee->gender }}</td>
                    <td>{{ $employee->hobbies }}</td>
                    <td>
                        <img height="75" src="/storage/{{ str_replace('public/','',$employee->photo) }}" alt="" srcset="">
                    </td>
                    <td>{{ $employee->created_at ? Carbon\Carbon::parse($employee->created_at)->format('Y-m-d') : '-' }}</td>
                    <td>

                    </td>
                </tr>
            </tbody>
        @endforeach
    </table>
</x-app>