<table class="table table-hover border-0 w-100">
    <thead>
        <tr>
            <th>ID</th>
            <th>Role</th>
            <th colspan="2"></th>
        </tr>
    </thead>

    <tbody>
        @foreach ($roles as $role)
            <tr>
                <td>{{$role->id}}</td>
                <td>{{$role->name}}</td>
                <td width="10px">
                    <a href="{{route('roles.edit', $role)}}" class="btn btn-primary btn-sm">Edit</a>
                </td>
                <td width="10px">
                    <form action="{{route('roles.destroy', $role)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
