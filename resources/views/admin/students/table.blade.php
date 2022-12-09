<table id="clientes" class="table table-hover">
    <thead>
        <tr>
            <th style="width: 10px"># </th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>DNI</th>
            <th>Fecha Nacimiento</th>
            <th>Teléfono</th>
            <th>Correo Electronico</th>
            <th>Fecha de Inicio</th>
            @if (@Auth::user()->hasAnyRole('SuperAdmin'))
                <th style="width: 40px">Acciones</th>
            @endif
        </tr>
    </thead>
    <tbody>
        @foreach ($studentss as $students)
            <tr>
                <td>{{ $students->id }}</td>
                <td>
                    {{ $students->name }}
                </td>
                <td>
                    {{ $students->surname }}}}
                </td>
                <td>
                    {{ $students->dni }}
                </td>
                <td>{{ $students->date_of_birth }}</td>
                <td>
                    {{ $students->phone }}
                </td>
                <td>
                    {{ $students->email }}
                </td>
                <td>
                    {{ $students->date_of_address }}
                </td>

                <td class="d-flex">

                    @can('admin.studentss.show')
                        <a href="{{ route('studentss.show', [$students->id]) }}" class="mr-1 btn btn-sm btn-success" title="Ver"> <i class="fas fa-eye"></i> </a>
                    @endcan
                    @can('admin.studentss.edit')
                        <a href="{{ route('studentss.edit', [$students->id]) }}" class="mr-1 btn btn-sm btn-primary" title="Editar"> <i class="fas fa-edit"></i> </a>
                    @endcan
                    @can('admin.studentss.destroy')
                        <form action="{{ route('studentss.destroy', [$students->id]) }}" class="mr-1" method="POST" title="Eliminar">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Delete Student {{ $students->name }}?')" title="Delete Student"> <i class="fas fa-trash"></i> </button>
                        </form>
                    @endcan
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
