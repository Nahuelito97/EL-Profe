@extends('layouts.app')


@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <div class="content-header pt-3 pb-3 px-0 bg-white">
            <div class="container-fluid">

                <div class="callout callout-info">
                    <h5><i class="fas fa-info"></i> Students</h5>
                    <section class="content-header">
                        <div class="container-fluid">
                          <div class="row mb-2">
                            <div class="col-sm-6">
                              <h1 class="m-0 text-dark"></h1>
                              <br>
                              <h1 class="all-tittles text-dark"> <small></small></h1>
                            </div>
                            <div class="col-sm-6">
                              <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item active">Students</li>
                                <li class="breadcrumb-item"><a href="{{ route('studentss.create') }}">Create.</a></li>
                              </ol>
                            </div><!-- /.col -->
                          </div>
                          <div class="col-xs-12 col-sm-4 col-md-3">
                              <img src="{{asset(
                                'front-end/assets/img/user03.png')}}" alt="user" class="img-responsive center-box" style="max-width: 110px;">
                          </div>
                          <br>
                          <div class="col-xs-12 col-sm-8 col-md-8 text-justify lead">
                           <h4>
                               Bienvenido a la sección donde se encuentra el listado de los alumnos de la institución, podrás buscar los alumnos por su nombre.
                               Puedes actualizar o eliminar los datos de un alumno seleccionado.
                           </h4>
                           <br>
                          </div>
                        </div><!-- /.container-fluid -->
                      </section>
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
                                <div class="card_layout pt-3">
                                    <div class="card_layout_header border-0 layout_title col-md-11 mx-auto px-0 pt-3">
                                        Alumns List
                                        @can('admin.studentss.create')
                                            <a class="btn btn-primary button_theme float-right"
                                                href="{{ route('studentss.create') }}">+
                                                Create New</a>
                                        @endcan

                                    </div>
                                    <br>
                                    <div class="card-body col-md-11 mx-auto px-0 ">
                                        <div class="card card-default">
                                            <div class="card-header">
                                                <div class="card-tools">
                                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                                        <i class="fas fa-minus"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                @if (count($studentss))
                                                    <table id="" class="table table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th style="width: 10px"># </th>
                                                                <th>Nombre</th>
                                                                <th>Apellido</th>
                                                                <th>DNI</th>
                                                                <th>Teléfono</th>
                                                                <th>Correo Electronico</th>
                                                                <th>Fecha de Inicio</th>
                                                                <th></th>
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
                                                                    <td>
                                                                        {{ $students->telefono->caracteristica }} {{ $students->telefono->numero}}
                                                                    </td>
                                                                    <td>
                                                                        {{ $students->email }}
                                                                    </td>
                                                                    <td>
                                                                        {{ date('d-m-Y', strtotime($students->created_at)) }}
                                                                    </td>
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
