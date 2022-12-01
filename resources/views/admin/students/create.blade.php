@extends('layouts.app')
@section('page_title', 'Admint Student')a
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        @include('admin.students.section')

        <section class="content-header">
            <div class="container-fluid">
                <div class="col-xs-12 col-sm-8 col-md-8 text-justify lead">
                    <h4>
                        Admitir estudiante.
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
                        <!-- SELECT2 EXAMPLE -->
                        <div class="card card-default">
                            <div class="card-header">
                                <h3 class="card-title">Complete el siguiente formulario para admitir un nuevo Estudiante
                                </h3>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <form action="{{ route('studentss.store') }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Nombre: <span class="text-danger">*</span></label>
                                                <input type="name" name="name" class="form-control" id="name"
                                                    required placeholder="Ingrese un nombre para el Estudiante">
                                            </div>
                                            <!-- /.form-group -->
                                            <div class="form-group">
                                                <label for="surname" class="control-label text-semibold">Apellido</label>
                                                <input type="surname" name="surname" class="form-control" id="surname"
                                                    placeholder="Ingrese un nombre para la categoría">
                                            </div>
                                            <div class="form-group">
                                                <label for="date_of_birth" class="control-label text-semibold">Fecha de
                                                    Nacimiento.</label>
                                                <input id="date_of_birth" type="date" class="form-control"
                                                    name="date_of_birth" value="{{ old('date_of_birth') }}"
                                                    autocomplete="año" autofocus""
                                                    placeholder="Escribe aquí la fecha de nacimiento">
                                            </div>
                                            <div class="form-group">
                                                <label for="phone" class="control-label text-semibold">Telefono</label>
                                                <input type="phone" name="phone" class="form-control" id="phone"
                                                    placeholder="Ingrese un nombre para la categoría">
                                            </div>
                                            <!-- /.form-group -->
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="dni" class="control-label text-semibold">DNI</label>
                                                <input type="dni" name="dni" class="form-control" id="dni"
                                                    placeholder="Ingrese un nombre para la categoría">
                                            </div>
                                            <!-- /.form-group -->
                                            <div class="form-group">
                                                <label for="email" class="control-label text-semibold">Email</label>
                                                <input type="email" name="email" class="form-control" id="email"
                                                    placeholder="Ingrese un nombre para la categoría">
                                            </div>
                                            <!-- /.form-group -->
                                            <div class="form-group">
                                                <label for="date_of_address" class="control-label text-semibold">Fecha de
                                                    Matriculación.</label>
                                                <input id="date_of_address" type="date" class="form-control"
                                                    name="date_of_address" value="{{ old('date_of_address') }}"
                                                    autocomplete="año" autofocus""
                                                    placeholder="Escribe aquí la fecha de nacimiento">
                                            </div>
                                            <div class="form-group">
                                                <label for="email" class="control-label text-semibold">Email</label>
                                                <input type="email" name="email" class="form-control" id="email"
                                                    placeholder="Ingrese un nombre para la categoría">
                                            </div>
                                        </div>
                                        <!-- /.col -->
                                    </div>
                                    <div class="col-md-4 text-align-center">
                                        <p class="text-center">
                                            <button type="reset" class="btn btn-info btn-rounded"
                                                style="margin-right: 20px;"><i class="zmdi zmdi-roller"></i> &nbsp;&nbsp;
                                                Limpiar</button>
                                            <button type="submit" class="btn btn-primary btn-rounded"><i
                                                    class="zmdi zmdi-floppy"></i> &nbsp;&nbsp; Registrar Alumno</button>
                                            <a class="btn btn-primary btn-rounded"
                                                href="{{ route('studentss.index') }}">Volver</a>
                                        </p>
                                    </div>
                                    <!-- /.row -->
                                </form>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                Visit <a href="https://select2.github.io/">Select2 documentation</a> for more examples and
                                information about
                                the plugin.
                            </div>
                        </div>
                        <!-- /.card -->
                    </div>
                    <!--/.col (right) -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
