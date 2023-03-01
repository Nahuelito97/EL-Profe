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
                    <div class="col-xs-12 col-sm-8 col-md-8 text-justify lead">
                        <h4>
                            Bienvenido a la sección donde podra crear un nuevo país..
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

                    <div class="col-md-8 card bg-white mx-auto card_list border-0">
                        <div class="table-responsive">
                            <div class="col-md-12 card-body pt-3">
                                <div class="card_layout pt-3">
                                    <h5>Crear Países</h5>
                                    @if (session('Success'))
                                        <div class="alert alert-success">
                                            {{ session('Success') }}
                                        </div>
                                    @endif
                                    <div class="card-body col-md-11 mx-auto px-0 ">
                                        <div class="row">
                                            <div class="col-md-8 grid-margin mx-auto px-0 ">
                                                <div class="card">
                                                    <form action="{{ route('todos.store') }}" method="POST">
                                                        @csrf
                                                        <div class="card-body">

                                                            <div class="form-group">
                                                                <label for="name" class="control-label text-semibold">
                                                                    <h5>Nombre: <span class="text-danger">*</span>
                                                                    </h5>
                                                                </label>
                                                                <input type="text" name="name"
                                                                    class="form-control @error('name') is-invalid @enderror"
                                                                    id="name"
                                                                    placeholder="Ingrese un nombre para el País">
                                                                @error('name')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            </div>
                                                            <div class="row mt-2">
                                                                <div
                                                                    class="col d-flex align-items-center justify-content-end">
                                                                    <button type="reset" class="btn btn-info btn-rounded"
                                                                        style="margin-right: 20px;"><i
                                                                            class="zmdi zmdi-roller"></i> &nbsp;&nbsp;
                                                                        Limpiar</button>
                                                                    <button type="submit"
                                                                        class="btn btn-primary btn-rounded "><i
                                                                            class="zmdi zmdi-floppy"></i> &nbsp;&nbsp; +
                                                                        Registrar
                                                                        País</button>
                                                                </div>
                                                                <a type="button" class="btn btn-primary btn-rounded"
                                                                    href="{{ route('todos.index') }}">Back</a>
                                                            </div>
                                                        </div>
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
