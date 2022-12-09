@extends('layouts.app')


@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <div class="content-header pt-3 pb-3 px-0 bg-white">
            <div class="container-fluid">
                <div class="row mb-2">

                    <div class="col-md-11 mx-auto px-0 dashboard_route">
                        <p> > Dashboard <span class="ml-2"> > Campaigns</span><span class="ml-2"> > Create New</span></p>

                    </div>
                </div><!-- /.row -->
                <div class="col-md-11 mx-auto pt-2 pb-2 px-0 d-flex align-items-center justify-content-between"
                    style="height: 60px">
                    <h1 class="section_title mb-0">Profesors</h1>

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
                                        Create a Profesor
                                    </div>
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
                                                <form  method="POST" action="{{ route('profesorss.store') }}">
                                                    @csrf
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Nombre: <span class="text-danger">*</span></label>
                                                                <input type="name" name="name" class="form-control"
                                                                    id="name" required
                                                                    placeholder="Ingrese un nombre para el Estudiante">
                                                            </div>
                                                            <!-- /.form-group -->
                                                            <div class="form-group">
                                                                <label for="surname"
                                                                    class="control-label text-semibold">Apellido: <span
                                                                        class="text-danger">*</span></label>
                                                                <input type="surname" name="surname" class="form-control"
                                                                    id="surname"
                                                                    placeholder="Ingrese un nombre para la categoría">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="dni"
                                                                    class="control-label text-semibold">DNI: <span
                                                                        class="text-danger">*</span></label>
                                                                <input type="dni" name="dni" class="form-control"
                                                                    id="dni"
                                                                    placeholder="Ingrese un nombre para la categoría">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="date_of_birth"
                                                                    class="control-label text-semibold">Fecha de
                                                                    Nacimiento: <span class="text-danger">*</span></label>
                                                                <input id="date_of_birth" type="date"
                                                                    class="form-control" name="date_of_birth"
                                                                    value="{{ old('date_of_birth') }}"
                                                                    autocomplete="date_of_birth" autofocus""
                                                                    placeholder="Escribe aquí la fecha de nacimiento">
                                                            </div>
                                                        </div>
                                                        <!-- /.col -->
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="phone"
                                                                    class="control-label text-semibold">Phone: <span
                                                                        class="text-danger">*</span></< /label>
                                                                    <input type="text" name="phone"
                                                                        class="form-control" id="phone"
                                                                        placeholder="Ingrese un nombre para la categoría">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="email"
                                                                    class="control-label text-semibold">Email: <span
                                                                        class="text-danger">*</span></label>
                                                                <input type="email" name="email" class="form-control"
                                                                    id="email"
                                                                    placeholder="Ingrese un nombre para la categoría">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="date_of_address"
                                                                    class="control-label text-semibold">Fecha de
                                                                    Matriculación: <span
                                                                        class="text-danger">*</span></label>
                                                                <input id="date_of_address" type="date"
                                                                    class="form-control" name="date_of_address"
                                                                    value="{{ old('date_of_address') }}" autocomplete="año"
                                                                    autofocus""
                                                                    placeholder="Escribe aquí la fecha de nacimiento">
                                                            </div>
                                                        </div>
                                                        <!-- /.col -->
                                                    </div>
                                                    <div class="row mt-2">
                                                        <div class="col d-flex align-items-center justify-content-end">
                                                            <button type="reset" class="btn btn-info btn-rounded"
                                                                style="margin-right: 20px;"><i
                                                                    class="zmdi zmdi-roller"></i> &nbsp;&nbsp;
                                                                Limpiar</button>
                                                            <button type="submit" class="btn btn-primary btn-rounded"><i
                                                                    class="zmdi zmdi-floppy"></i> &nbsp;&nbsp; Registrar
                                                                Alumno</button>

                                                        </div>
                                                    <div>

                                                </form>

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
