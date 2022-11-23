@extends('layouts.app')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        @include('admin.students.section')

        <section class="content-header">
            <div class="container-fluid">
                <div class="col-xs-12 col-sm-8 col-md-8 text-justify lead">
                    <h4>
                        Bienvenido a esta sección, aqui puede cargar la información o datos referentes a un alumno en el
                        sigueinte
                        formulario.
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
                                <h3 class="card-title">Complete el siguiente formulario.</h3>

                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">

                                <form action="{{ route('studentss.store') }}" method="POST">
                                    @csrf
                                    <div class="col-lg-12">
                                        <div class="from-group has-feedback">
                                            <label for="name" class="control-label text-semibold">Nombre</label>
                                            <input type="name" name="name" class="form-control" id="name"
                                                placeholder="Ingrese un nombre para la categoría">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="from-group has-feedback">
                                            <label for="surname" class="control-label text-semibold">Apellido</label>
                                            <input type="surname" name="surname" class="form-control" id="surname"
                                                placeholder="Ingrese un nombre para la categoría">

                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group has-feedback">
                                            <label for="dni" class="control-label text-semibold">DNI</label>
                                            <input type="dni" name="dni" class="form-control" id="dni"
                                                placeholder="Ingrese un nombre para la categoría">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="from-group has-feedback">
                                            <label for="date_of_birth" class="control-label text-semibold">Fecha de
                                                Nacimiento.</label>
                                            <input id="date_of_birth" type="date"
                                            class="form-control" name="date_of_birth" value="{{ old('date_of_birth') }}"
                                            autocomplete="año"
                                            autofocus""
                                            placeholder="Escribe aquí la fecha de nacimiento">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group has-feedback">
                                            <label for="phone" class="control-label text-semibold">Telefono</label>
                                            <input type="phone" name="phone" class="form-control" id="phone"
                                                placeholder="Ingrese un nombre para la categoría">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group has-feedback">
                                            <label for="email" class="control-label text-semibold">Email</label>
                                            <input type="email" name="email" class="form-control" id="email"
                                                placeholder="Ingrese un nombre para la categoría">
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="from-group has-feedback">
                                            <label for="date_of_address" class="control-label text-semibold">Fecha de
                                                Matriculación.</label>
                                            <input id="date_of_address" type="date" class="form-control"
                                                name="date_of_address" value="{{ old('date_of_address') }}"
                                                autocomplete="año" autofocus""
                                                placeholder="Escribe aquí la fecha de nacimiento">
                                        </div>
                                    </div>


                                    <div class="col-xs-12">
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
                                </form>

                            </div>
                            <!-- /.card-body -->
                        </div>

                    </div>
                    <!--/.col (right) -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
