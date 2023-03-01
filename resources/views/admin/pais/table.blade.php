<div class="card-body">
    @if (count($countrys))
    <table class="table table-hover border-0 w-100 responsive" id="especialities">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Acciones</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($countrys as $country)
                    <tr>
                        <td>{{ $country->id }}</td>
                        <td>{{ $country->name }}</td>
                        <td class="d-flex">
                            <a href="{{ route('todos.edit', [$country->id]) }}" class="mr-1 btn btn-sm btn-success"
                                title="Editar"> Editar</a>

                            <form action="{{ route('todos.destroy', [$country->id]) }}"
                                class="mr-1 formulario-eliminar"
                                method="POST"
                                title="Delete">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <div><span>No data</span></div>
    @endif
</div>
