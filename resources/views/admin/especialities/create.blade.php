@extends('layouts.app')


@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <div class="content-header pt-3 pb-3 px-0 bg-white">
            <div class="container-fluid">
                <div class="row mb-2">

                    <div class="col-md-11 mx-auto px-0 dashboard_route">
                        <p> > Dashboard <span class="ml-2"> > Especiality/span><span class="ml-2"> > Create New</span></p>

                    </div>
                </div><!-- /.row -->
                <div class="col-md-11 mx-auto pt-2 pb-2 px-0 d-flex align-items-center justify-content-between"
                    style="height: 60px">
                    <h1 class="section_title mb-0">Especiality</h1>

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
                                        Create a Especiality
                                    </div>
                                    @if (session('Success'))
                                        <div class="alert alert-success">
                                            {{ session('Success') }}
                                        </div>
                                    @endif
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
                                                <form action="{{ route('especialities.store') }}" method="POST">
                                                    @csrf
                                                    <div class="card-body">

                                                        <div class="form-group">
                                                            <label for="name" class="control-label text-semibold">Nombre</label>
                                                            <input type="name" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Ingrese un nombre para la ciudad">
                                                            @error('name')
                                                                <span class="invalid-feedback"
                                                                    role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputPassword1" class="control-label text-semibold">Descripción </label>
                                                            <textarea name="description" id="description" rows="4" class="form-control @error('provincies_id') is-invalid @enderror"
                                                                placeholder="Ingrese la descripción para la especialidad"></textarea>

                                                                @error('description')
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
                                                                style="margin-right: 20px;"><i
                                                                    class="zmdi zmdi-roller"></i> &nbsp;&nbsp;
                                                                Limpiar</button>
                                                            <button type="submit" class="btn btn-primary btn-rounded "><i
                                                                    class="zmdi zmdi-floppy"></i> &nbsp;&nbsp; + Registrar
                                                                Alumno</button>
                                                        </div>
                                                        <a type="button" class="btn btn-primary btn-rounded"
                                                        href="{{ route('especialities.index') }}">Back</a>
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
