<div class="card-body">
    @if (count($especialitiesss))
    <table class="table table-hover border-0 w-100 responsive" id="especialities">
        <thead>
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Descipción</th>
                <th></th>
            </tr>
        </thead>

        <tbody>
            @foreach ($especialitiesss as $especialities)
                <tr>
                    <td>{{$especialities->id}}</td>
                    <td>{{$especialities->name}}</td>
                    <td>{{$especialities->description}}</td>

                    <td class="d-flex">
                        <a href="{{ route('especialities.edit', [$especialities->id]) }}" class="mr-1 btn btn-sm btn-success"  title="Edit">Editar</a>
                        <form action="{{ route('especialities.destroy', [$especialities->id]) }}" class="mr-1 formulario-eliminar"
                            method="POST" title="Delete">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
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
