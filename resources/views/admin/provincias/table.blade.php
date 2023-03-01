<div class="card_layout_header border-0 layout_title col-md-11 mx-auto px-0 pt-3">
    Provincias List
    @if (@Auth::user()->hasAnyRole('SuperAdmin'))
        <a class="btn btn-primary button_theme float-right" href="{{ route('provincias.create') }}">+
            Create New</a>
    @endif
</div>
<br>
<div class="card-body col-md-11 mx-auto px-0 ">
    <div class="card card-default">

        <div class="card-body">
            @if (count($provinciass))
                <table class="table table-hover border-0 w-100 responsive" id="especialities">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>País</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($provinciass as $provincias)
                            <tr>
                                <td>{{ $provincias->id }}</td>
                                <td>{{ $provincias->name }}</td>
                                <td>
                                    @if (!empty($provincies->pais))
                                        <span class="badge badge-outline-info">
                                            {{ $provincies->pais->name }}
                                        </span>
                                    @else
                                        <span class="badge badge-outline-danger">No tiene país</span>
                                    @endif
                                </td>

                                <td class="d-flex">
                                    <a href="{{ route('provincias.edit', [$provincias->id]) }}"
                                        class="mr-1 btn btn-sm btn-success" title="Edit">Edit</a>
                                    <form action="{{ route('provincias.destroy', [$provincias->id]) }}"
                                        class="mr-1 formulario-eliminar" method="POST" title="Delete">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
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
    </div>
</div>
