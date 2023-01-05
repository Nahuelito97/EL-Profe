<table id="asistencias" class="table table-hover">
    <thead>
        <tr>
            <th style="width: 10px"># </th>
            <th>Name</th>
            <th>Surname</th>
            <th>Phone</th>
            <th>Email</th>
            <th style="width: 20px">Status</th>
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
                @if ($students->status == 'AUSENTE')
                    <td width="10px">
                        <a href="{{ route('change.status.students', $students) }}" class="btn btn-danger"
                            title="Change">AUSENTE</i></a>
                    </td>
                @elseif ($students->status == 'PRESENTE')
                    <td width="10px">
                        <a href="{{ route('change.status.students', $students) }}" class="btn btn-success"
                            title="Change">PRESENTE</a>
                    </td>
                @endif
                @if($students->status == 'TARDANZA')
                    <td width="10px">
                        <a href="{{ route('change.status.students', $students) }}" class="btn btn-warning"
                            title="Change">TARDANZA</a>
                    </td>
                @endif
        @endforeach
    </tbody>
</table>
