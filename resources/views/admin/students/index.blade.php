@extends('layouts.app')


@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Sistema bibliotecario</h1>
                        <br>
                        <h1 class="all-tittles text-dark"> <small></small></h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item active">Clientes</li>

                        </ol>
                    </div><!-- /.col -->
                </div>
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <img src="{{ asset('front-end/assets/img/user03.png') }}" alt="user"
                        class="img-responsive center-box" style="max-width: 110px;">
                </div>
                <br>
                <div class="col-xs-12 col-sm-8 col-md-8 text-justify lead">
                    <h4>
                        Bienvenido a la sección donde se encuentra el listado de clientes de la
                        biblioteca, podrás buscar los clientes por nombre.
                        Puedes actualizar o eliminar los datos del cliente.
                    </h4>
                    <br>
                </div>

            </div><!-- /.container-fluid -->

        </section>



        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-md-12">
                        <!-- general form elements disabled -->
                        <div class="card card-warning">
                            <div class="card-header">
                                <h3 class="card-title">Listado de Alumnos.</h3>
                            </div>

                            <!-- /.card-header -->
                            <div class="card-body">

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
                                            @if (@Auth::user()->hasAnyRole('Admin'))
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
                                                    @if (@Auth::user()->hasAnyRole('Admin'))
                                                        <a href="{{ route('studentss.show', [$students->id]) }}" class="mr-1 btn btn-sm btn-success" title="Ver"> <i class="fas fa-eye"></i> </a>
                                                        <a href="{{ route('studentss.edit', [$students->id]) }}" class="mr-1 btn btn-sm btn-primary" title="Editar"> <i class="fas fa-edit"></i> </a>
                                                        <form action="{{ route('studentss.destroy', [$students->id]) }}" class="mr-1" method="POST" title="Eliminar">
                                                            @method('DELETE')
                                                            @csrf
                                                            <button type="submit" class="btn btn-sm btn-danger"> <i class="fas fa-trash"></i> </button>
                                                        </form>
                                                    @endif
                                                </td>

                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                @if (@Auth::user()->hasAnyRole('Admin'))
                                    <a class="btn btn-primary button_theme float-right"
                                        href="{{ route('studentss.create') }}">+
                                        Create New</a>
                                @endif
                            </div>
                        </div>

                    </div>
                    <br>
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                            {{ $studentss->links() }}
                        </ul>
                    </nav>
                    <!--/.col (right) -->

                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
