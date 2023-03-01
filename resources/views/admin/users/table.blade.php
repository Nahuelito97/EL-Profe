<div class="card-body">
    <table class="table table-hover border-0 w-100 responsive" id="especialities">
        <thead>
            <tr>
                <th style="width: 10px"># </th>
                <th>Imagen</th>
                <th>Nombre</th>
                <th>Correo Electronico</th>
                <th>Roles</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>
                        <div style="max-width: 70px; max-height:70px;overflow:hidden">
                            <img src="{{ asset($user->image) }}" class="img-fluid" alt="">
                        </div>
                    </td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        @forelse ($user->roles as $role)
                            <span class="badge badge-outline-info">
                                {{ $role->name }}
                            </span>
                        @empty
                            <span class="badge badge-outline-danger">No roles</span>
                        @endforelse
                    </td>


                    <td class="d-flex">
                        <a href="{{ route('users.show', [$user->id]) }}" class="mr-1 btn btn-sm btn btn-info btn-rounded badge"
                            title="Show">Mostrar</a>
                        <a href="{{ route('users.edit', [$user->id]) }}" class="mr-1 btn btn-sm btn-success badge"
                            title="Editar">
                            Editar </a>
                        @if (Auth::user()->id != $user->id)
                            <form action="{{ route('users.destroy', [$user->id]) }}" class="mr-1" method="POST"
                                title="Eliminar">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-sm btn-danger"
                                    onclick="return confirm('Delete Student {{ $user->name }}?')"
                                    title="Delete Student">Eliminar</button>
                            </form>
                        @endif

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
