<table id="profesors" <table class="table table-hover border-0 w-100">
    <thead>
        <tr>
            <th scope="col" class="table_head_label px-1 col-1 col-md-1 text-center">ID</th>
            <th scope="col" class="table_head_label px-1 col-1 col-md-1 text-center">Name</th>
            <th scope="col" class="table_head_label px-1 col-1 col-md-1 text-center">Mail</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
            <tr class="content-center">
                <th scope="row" class="col-1 col-md-1 px-1 text-center">{{ $user->id }}</th>
                <th scope="row" class="col-1 col-md-1 px-1 text-center">{{ $user->name }}</th>
                <th scope="row" class="col-1 col-md-1 px-1 text-center">{{ $user->email }}</th>
                <td class="d-flex">
                    <a href="{{ route('users.edit', [$user->id]) }}" class="mr-1 btn btn-sm btn-primary" title="Editar">
                        <i class="fas fa-edit"></i> </a>

                    <form action="{{ route('users.destroy', [$user->id]) }}" class="mr-1" method="POST"
                        title="Eliminar">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-sm btn-danger"
                            onclick="return confirm('Delete Student {{ $user->name }}?')" title="Delete Student"> <i
                                class="fas fa-trash"></i> </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
