<table id="clientes" class="table table-hover">
    <thead>
        <tr>
            <th style="width: 10px"># </th>
            <th>Name</th>
            <th>Surname</th>
            <th>Phone</th>
            <th>Email</th>
            <th style="width: 20px">Status</th>
            <th style="width: 20px">Actions</th>
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
                    {{ $students->phone }}
                </td>
                <td>
                    {{ $students->email }}
                </td>
                <td class="px-1 col-1 col-md-1">
                    <div class="d-flex align-items-center justify-content-center px-1 ">
                        <div
                            @if ($students->estado)
                            class="circle_{{ in_array($students->estado->status, ['Presente', 'Ready']) ? 'active' : 'inactive' }}">

                            @endif
                        </div>
                        <span @if ($students->estado)
                            class="text-{{ in_array($students->estado->status, ['Presente', 'Ready']) ? 'success' : 'danger' }} ml-2">{{ $students->estado->status }}</span>

                        @endif
                    </div>

                </td>
                <td class="col-1 col-md-1 px-1 d-flex justify-content-center">
                    @if ($students->status != 'Presente')
                        <a href="{{ route('asistencias.edit', [$students->id]) }}"
                            class="btn btn-primary btn-sm">Edit</a>
                    @endif
                </td>
        @endforeach
    </tbody>
</table>
