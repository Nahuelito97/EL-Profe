@extends('layouts.app')


@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <div class="content-header pt-3 pb-3 px-0 bg-white">
            <div class="container-fluid">

                <div class="callout callout-info">
                    <h5><i class="fas fa-info"></i> Cities</h5>
                    <div class="row mb-2">
                        <div class="col-md-11 mx-auto px-0 dashboard_route">
                            <p> > Dashboard <span class="ml-2"> > Cities</span></p>
                        </div>
                    </div><!-- /.row -->.
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
                                        Create Cities
                                    </div>
                                    @if (session('Success'))
                                        <div class="alert alert-success">
                                            {{ session('Success') }}
                                        </div>
                                    @endif
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
                                                <form method="POST" action="{{ route('cities.store') }}"
                                                    class="formulario-crear">
                                                    @csrf
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
                                                        <label for="cod_post" class="control-label text-semibold">Codigo Postal</label>
                                                        <input type="cod_post" name="cod_post" class="form-control @error('cod_post') is-invalid @enderror" id="cod_post" placeholder="Ingrese un codigo postal para la ciudad">
                                                        @error('cod_post')
                                                            <span class="invalid-feedback"
                                                                role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>

                                                    <div class="from-group has-feedback">
                                                        <label for="provincies_id"
                                                            class="control-label text-semibold">Select
                                                            a Provincia</label>
                                                        <select id="provincies_id"
                                                            class="form-control @error('provincies_id') is-invalid @enderror"
                                                            name="provincies_id"
                                                            data-toggle="tooltip"
                                                            data-placement="top"
                                                            title="Select a Provincia">
                                                            <option value="#" selected
                                                                disabled>Todos..</option>
                                                            @foreach ($provincias as $c)
                                                                @if (old('provincies_id') == $c->id)
                                                                    <option
                                                                        value="{{ $c->id }}"
                                                                        selected>
                                                                        {{ $c->name }}
                                                                    </option>
                                                                @else
                                                                    <option
                                                                        value="{{ $c->id }}">
                                                                        {{ $c->name }}
                                                                    </option>
                                                                @endif
                                                            @endforeach
                                                        </select>
                                                        @error('provincies_id')
                                                            <span class="invalid-feedback"
                                                                role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>

                                                    <div class="row mt-2">
                                                        <div class="col d-flex align-items-center justify-content-end">
                                                            <button type="reset" class="btn btn-info btn-rounded"
                                                                style="margin-right: 20px;"><i class="zmdi zmdi-roller"></i>
                                                                &nbsp;&nbsp;
                                                                Limpiar</button>
                                                            <button type="submit" class="btn btn-primary btn-rounded "><i
                                                                    class="zmdi zmdi-floppy"></i> &nbsp;&nbsp; Registrar
                                                                Provincias</button>
                                                        </div>
                                                        <a type="button" class="btn btn-primary btn-rounded"
                                                            href="{{ route('cities.index') }}">Back</a>
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
