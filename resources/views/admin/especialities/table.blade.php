<table class="table table-hover border-0 w-100 responsive" id="especialities">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th></th>
            <th></th>
        </tr>
    </thead>

    <tbody>
        @foreach ($especiality as $esp)
            <tr>
                <td>{{$esp->id}}</td>
                <td>{{$esp->name}}</td>
                <td width="10px">
                    <a href="{{ route('especialities.show', [$esp->id]) }}" class="mr-1 btn btn-sm btn-success"
                        title="Show">Show</a>                </td>
                <td width="10px">
                    <a href="{{route('especialities.edit', $esp)}}" class="btn btn-primary btn-sm">Edit</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
