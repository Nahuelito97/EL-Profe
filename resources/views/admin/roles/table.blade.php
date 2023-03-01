<div class="card-body">
    <table class="table table-hover border-0 w-100 responsive" id="especialities">
        <thead>
            <tr>
                <th>ID</th>
                <th>Rol</th>
                <th></th>

            </tr>
        </thead>

        <tbody>
            @foreach ($roles as $role)
                <tr>
                    <td>{{ $role->id }}</td>
                    <td>{{ $role->name }}</td>
                    <td width="10px">
                        <a href="{{ route('roles.edit', $role) }}" class="mr-1 btn btn-sm btn-primary" title="Editar">
                            Editar </a>

                    </td>
                    {{--   <td width="10px">
                        <form action="{{ route('roles.destroy', $role) }}" method="post"
                            class="mr-1 formulario-eliminar">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td> --}}
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
