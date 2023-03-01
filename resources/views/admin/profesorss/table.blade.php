
<div class="card-body">
    @if (count($profesorss))
    <table class="table table-hover border-0 w-100 responsive" id="especialities">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Surname</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Acciones</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($profesorss as $profesors)
                    <tr>
                        <th>
                            {{ $profesors->id }}</th>
                        <td>{{ $profesors->name }}</td>

                        <td>
                            {{ $profesors->surname }}
                        </td>
                        <td>
                            {{ $profesors->phone }}
                        </td>
                        <td>
                            {{ $profesors->email }}
                        </td>
                        <td class="d-flex">

                            <a href="{{ route('profesorss.show', [$profesors->id]) }}"
                                class="mr-1 btn btn-sm btn-success"
                                title="Show">Show</a>

                            <a href="{{ route('profesorss.edit', [$profesors->id]) }}"
                                class="mr-1 btn btn-sm btn-primary"
                                title="Edit">Edit</a>

                            <form
                                action="{{ route('profesorss.destroy', [$profesors->id]) }}"
                                class="mr-1 formulario-eliminar" method="POST"
                                title="Delete">
                                @method('DELETE')
                                @csrf
                                <button type="submit"
                                    class="btn btn-sm btn-danger">Delete</button>
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
