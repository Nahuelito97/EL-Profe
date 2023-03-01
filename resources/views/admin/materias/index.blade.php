@extends('layouts.app')


@section('content')
    <div class="content-wrapper">
        <div class="content-header pt-3 pb-3 px-0 bg-white">
            <div class="container-fluid">

                <div class="callout callout-info">
                    <div class="col-xs-12 col-sm-4 col-md-3">
                        <img src="{{ asset('front-end/assets/img/category.png') }}" alt="user"
                            class="img-responsive center-box" style="max-width: 110px;">
                    </div>
                    <div class="col-xs-12 col-sm-8 col-md-8 text-justify lead">
                        <h4>
                            Bienvenido a la sección donde se encuentra el listado de las materias que se dictan es la
                            institucion, al editar una materia podra asocialra a un profesor..
                        </h4>
                        <br>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->


        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="card_layout pb-5 pt-3">

                    <div class="col-md-12 card bg-white mx-auto card_list border-0">
                        <div class="table-responsive">
                            <div class="col-md-12 card-body pt-3">
                                <div class="card_layout_header border-0 layout_title col-md-11 mx-auto px-0 pt-3">
                                    Lista de Materias
                                    @if (@Auth::user()->hasAnyRole('SuperAdmin'))
                                        <a class="btn btn-primary button_theme float-right btn-rounded"
                                            href="{{ route('materias.create') }}">+
                                            Crear Nuevo</a>
                                    @endif
                                </div>
                                <br>
                                <div class="card-body col-md-11 mx-auto px-0 ">
                                    <div class="card card-default">
                                        <div class="card-body">
                                            @if (count($materiass))
                                                <table class="table table-hover border-0 w-100 responsive"
                                                    id="especialities">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Name</th>
                                                            <th>Desciption</th>
                                                            <th>Profesor</th>
                                                            <th>Acciones</th>
                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                        @foreach ($materiass as $materias)
                                                            <tr>
                                                                <td>{{ $materias->id }}</td>
                                                                <td>{{ $materias->name }}</td>
                                                                <td>{{ $materias->description }}</td>

                                                                <td>
                                                                    @if (!empty($materias->profesor))
                                                                    <span class="badge badge-outline-info">
                                                                            {{ $materias->profesor->name }}
                                                                        </span>
                                                                    @else
                                                                    <span class="badge badge-outline-danger">No tiene profesor</span>
                                                                    @endif
                                                                </td>
                                                                <td class="d-flex">

                                                                    <a href="{{ route('materias.edit', [$materias->id]) }}"
                                                                        class="mr-1 btn btn-sm btn-primary btn-rounded"
                                                                        title="Edit">Edit</a>
                                                                    <form
                                                                        action="{{ route('materias.destroy', [$materias->id]) }}"
                                                                        class="mr-1 formulario-eliminar btn-rounded"
                                                                        method="POST" title="Delete">
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
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->

        </section>
        <!-- /.content -->
    </div>
@endsection

@section('js')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @if (session('delete') == 'OK')
        <script>
            Swal.fire(
                'Deleted!',
                'Your file has been deleted.',
                'success'
            )
        </script>
    @endif

    <script>
        $('.formulario-eliminar').submit(function(e) {
            e.preventDefault();
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    this.submit();
                }
            })
        });
    </script>
@endsection
