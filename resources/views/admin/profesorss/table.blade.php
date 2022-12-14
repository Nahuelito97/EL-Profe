<table id="profesors" <table class="table table-hover border-0 w-100">
    <thead>
        <tr>
            <th scope="col" class="table_head_label px-1 col-1 col-md-1 text-center">ID</th>
            <th scope="col" class="table_head_label px-1 col-1 col-md-1 text-center">Name</th>
            <th scope="col" class="table_head_label px-1 col-1 col-md-1 ">Surname</th>
            <th scope="col" class="table_head_label px-1 col-1 col-md-1 ">DNI</th>

            <th scope="col" class="table_head_label px-1 col-1 col-md-1 ">DateOfBirth</th>
            <th scope="col" class="table_head_label px-1 col-1 col-md-1 ">Phone</th>
            <th scope="col" class="table_head_label px-1 col-2 col-md-2 text-center">Email</th>
            <th scope="col" class="table_head_label px-1 col-1 col-md-1 text-center">DateofAddress</th>
            <th scope="col" class="table_head_label px-1 col-1 col-md-1 ">Especiality</th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($profesorss as $profesors)
            <tr class="content-center">
                <th scope="row" class="col-1 col-md-1 px-1 text-center">{{ $profesors->id }}</th>
                <td>{{ $profesors->name }}</td>

                <td>
                    {{ $profesors->surname }}}}
                </td>
                <td>
                    {{ $profesors->dni }}
                </td>
                <td>{{ $profesors->date_of_birth }}</td>
                <td>
                    {{ $profesors->phone }}
                </td>
                <td>
                    {{ $profesors->email }}
                </td>
                <td>
                    {{ $profesors->date_of_address }}
                </td>
                <td>{{ $profesors->especialitis->name }}</td>
                <td width="10px">

                        <a href="{{ route('profesorss.show', [$profesors->id]) }}" class="mr-1 btn btn-sm btn-success"
                            title="Show">Show</a>

                </td>
                <td width="10px">
                    @can('admin.profesorss.edit')
                        <a href="{{ route('profesorss.edit', [$profesors->id]) }}" class="mr-1 btn btn-sm btn-primary"
                            title="Edit">Edit</a>
                    @endcan
                </td>
                <td width="10px">
                    @can('admin.profesorss.destroy')
                        <form action="{{ route('profesorss.destroy', [$profesors->id]) }}" class="mr-1 formulario-eliminar"
                            method="POST" title="Delete">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    @endcan

                </td>

            </tr>
        @endforeach
    </tbody>
</table>
