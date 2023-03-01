<div class="card-body">
    @if (count($studentss))
    <table class="table table-hover border-0 w-100 responsive" id="especialities">
            <thead>
                <tr>
                    <th style="width: 10px"># </th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Teléfono</th>
                    <th>Correo Electronico</th>
                    <th>Fecha de Inicio</th>
                    <th>Acciones</th>
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
                            {{ $students->surname }}
                        </td>
                        <td>
                            {{ $students->phone }}
                        </td>
                        <td>
                            {{ $students->email }}
                        </td>
                        <td>
                            {{ date('d-m-Y', strtotime($students->created_at)) }}
                        </td>
                        {{-- <td>
                            @if (!empty($students->pais))
                                {{ $students->pais->name }}
                            @endif

                        </td>--}}
                        <td class="d-flex">
                            @can('admin.studentss.show')
                                <a href="{{ route('studentss.show', [$students->id]) }}"
                                    class="mr-1 btn btn-sm btn-success"
                                    title="Show">Show</a>
                            @endcan
                            @can('admin.studentss.edit')
                                <a href="{{ route('studentss.edit', [$students->id]) }}"
                                    class="mr-1 btn btn-sm btn-primary"
                                    title="Edit">Edit</a>
                            @endcan

                            @can('admin.studentss.destroy')
                                <form
                                    action="{{ route('studentss.destroy', [$students->id]) }}"
                                    class="mr-1 formulario-eliminar" method="POST"
                                    title="Delete">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit"
                                        class="btn btn-sm btn-danger">Delete</button>
                                </form>
                            @endcan
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <div><span>No data</span></div>
    @endif
</div>
