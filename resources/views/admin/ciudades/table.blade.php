<div class="card-body">
    @if (count($localidadess))
    <table class="table table-hover border-0 w-100 responsive" id="especialities">
        <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>CP</th>
                    <th>Provincia</th>
                    <th>Acciones</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($localidadess as $localidades)
                    <tr>
                        <td>{{ $localidades->id }}</td>
                        <td>{{ $localidades->name }}</td>
                        <td>{{ $localidades->cod_post }}</td>
                        <td>
                            @if (!empty($localidades->provincies))
                                <span class="badge badge-outline-info">
                                    {{ $localidades->provincies->name }}
                                </span>
                            @else
                                <span class="badge badge-outline-danger">No tiene
                                    provincia</span>
                            @endif
                        </td>

                        <td class="d-flex">
                            <a href="{{ route('cities.edit', [$localidades->id]) }}"
                                class="mr-1 btn btn-sm btn-success"
                                title="Edit">Edit</a>
                            <form
                                action="{{ route('cities.destroy', [$localidades->id]) }}"
                                class="mr-1 formulario-eliminar" method="POST"
                                title="Delete">
                                @method('DELETE')
                                @csrf
                                <button type="submit"
                                    class="btn btn-sm btn-danger">Delete</button>
                            </form>

                            {{-- <a href="{{ route('category.show', [$category->id]) }}" class="mr-1 btn btn-sm btn-success"> <i class="fas fa-eye"></i> </a> --}}
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <div><span>No data</span></div>
    @endif
</div>
