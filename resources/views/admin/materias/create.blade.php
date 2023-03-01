@extends('layouts.app')


@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <div class="content-header pt-3 pb-3 px-0 bg-white">
            <div class="container-fluid">

                <div class="callout callout-info">
                    <div class="col-xs-12 col-sm-4 col-md-3">
                        <img src="{{ asset('front-end/assets/img/section.png') }}" alt="user"
                            class="img-responsive center-box" style="max-width: 110px;">
                    </div>
                    <section class="content-header">
                        <div class="container-fluid">                          
                            <br>
                            <div class="col-xs-12 col-sm-8 col-md-8 text-justify lead">
                                <h4>
                                    Bienvenido a la sección donde podra cargar los datos de una nueva materia.
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
                                    <h5>Crear Materia</h5>
                                   
                                    @if (session('Success'))
                                        <div class="alert alert-success">
                                            {{ session('Success') }}
                                        </div>
                                    @endif
                                    <div class="card-body col-md-11 mx-auto px-0 ">
                                        <div class="card card-default">                                           
                                            <div class="card-body">
                                                <div class="card_layout_header border-0 layout_title col-md-11 mx-auto px-0 pt-3"><h5>
                                                    Campos Requeridos  <span class="text-danger">*</span></h5>
                                                 </div>
                                                <form action="{{ route('materias.store') }}" method="POST">
                                                    @csrf                                                                                                       
                                                    <div class="card-body">

                                                        <div class="form-group">
                                                            <label for="name"
                                                                class="control-label text-semibold"> <h5>Nombre <span class="text-danger">*</span></h5></label>
                                                            <input type="name" name="name"
                                                                class="form-control @error('name') is-invalid @enderror"
                                                                id="name"
                                                                placeholder="Ingrese un nombre para la materia">
                                                            @error('name')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputPassword1"
                                                                class="control-label text-semibold"> <h5>Descripción <span class="text-danger">*</span></h5></label>
                                                            <textarea name="description" id="description" rows="4"
                                                                class="form-control @error('provincies_id') is-invalid @enderror"
                                                                placeholder="Ingrese la descripción para la materia"></textarea>

                                                            @error('description')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                        <div class="from-group has-feedback">
                                                            <label for="profesor_id"
                                                                class="control-label text-semibold">Select
                                                                a Provincia</label>
                                                            <select id="profesor_id"
                                                                class="form-control @error('profesor_id') is-invalid @enderror"
                                                                name="profesor_id"
                                                                data-toggle="tooltip"
                                                                data-placement="top"
                                                                title="Select a Provincia">
                                                                <option value="#" selected
                                                                    disabled>Todos..</option>
                                                                @foreach ( $profesores as $profesor)
                                                                    @if (old('profesor_id') == $profesor->id)
                                                                        <option
                                                                            value="{{ $profesor->id }}"
                                                                            selected>
                                                                            {{ $profesor->name }}
                                                                        </option>
                                                                    @else
                                                                        <option
                                                                            value="{{ $profesor->id }}">
                                                                            {{ $profesor->name }}
                                                                        </option>
                                                                    @endif
                                                                @endforeach
                                                            </select>
                                                            @error('profesor_id')
                                                                <span class="invalid-feedback"
                                                                    role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="row mt-2">
                                                        <div class="col d-flex align-items-center justify-content-end">
                                                            <button type="reset" class="btn btn-info btn-rounded"
                                                                style="margin-right: 20px;"><i class="zmdi zmdi-roller"></i>
                                                                &nbsp;&nbsp;
                                                                Limpiar</button>
                                                            <button type="submit" class="btn btn-primary btn-rounded "><i
                                                                    class="zmdi zmdi-floppy"></i> &nbsp;&nbsp; + Registrar
                                                                Materia</button>
                                                        </div>
                                                        <a type="button" class="btn btn-primary btn-rounded"
                                                            href="{{ route('materias.index') }}">Back</a>
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
