@extends('layouts.app')


@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <div class="content-header pt-3 pb-3 px-0 bg-white">
            <div class="container-fluid">
                <div class="row mb-2">

                    <div class="col-md-11 mx-auto px-0 dashboard_route">
                        <p> > Dashboard <span class="ml-2"> > Ciudades</span><span class="ml-2"> > Edit</span></p>

                    </div>
                </div><!-- /.row -->
                <div class="col-md-11 mx-auto pt-2 pb-2 px-0 d-flex align-items-center justify-content-between"
                    style="height: 60px">
                    <h1 class="section_title mb-0">Ciudades</h1>

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
                                        Edit a Provincia
                                    </div>
                                    @if (session('Info'))
                                        <div class="alert alert-success">
                                            {{ session('Info') }}
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
                                                <form class="" method="post"
                                                action="{{ route('cities.update', $localidades) }}">

                                                {{ csrf_field() }}
                                                {{ method_field('put') }}

                                                    <div class="col-lg-12">
                                                        <div class="form-group has-feedback">
                                                            <label for="name">Nombre</label>
                                                            <input id="name" type="text"
                                                                class="form-control @error('name') is-invalid @enderror"
                                                                name="name" value="{{ old('name', $localidades->name) }}"
                                                                autocomplete="name" autofocus>
                                                            @error('name')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label for="cod_post">Codigo Postal</label>
                                                            <input id="cod_post" type="text"
                                                                class="form-control @error('cod_post') is-invalid @enderror"
                                                                name="cod_post"
                                                                value="{{ old('cod_post', $localidades->cod_post) }}"
                                                                autocomplete="cod_post" autofocus>
                                                            @error('cod_post')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="from-group has-feedback">
                                                            <label for="provincies_id"
                                                                class="control-label text-semibold">Select
                                                                a Provincia</label>
                                                            <select id="provincies_id"
                                                                class="form-control @error('provincies_id') is-invalid @enderror"
                                                                name="provincies_id" data-toggle="tooltip" data-placement="top"
                                                                title="Select a Provincia">
                                                                <option value="#" selected disabled>Todos..</option>
                                                                @foreach ($provincias as $c)
                                                                    @if (old('provincies_id') == $c->id)
                                                                        <option value="{{ $c->id }}" selected>
                                                                            {{ $c->name }}
                                                                        </option>
                                                                    @else
                                                                        <option value="{{ $c->id }}">
                                                                            {{ $c->name }}
                                                                        </option>
                                                                    @endif
                                                                @endforeach
                                                            </select>
                                                            @error('provincies_id')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                            </div>
                                                <hr>
                                                <div class="col-xs-12">
                                                    <p class="text-center">
                                                        <button type="submit" class="btn btn-primary btn-rounded"><i
                                                                class="zmdi zmdi-floppy"></i> &nbsp;&nbsp; Guardar</button>
                                                        <a class="btn btn-primary btn-rounded"
                                                            href="{{ route('cities.index') }}">Volver</a>
                                                    </p>
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
            <!-- /.row -->

        </section>
        <!-- /.content -->
    </div>
@endsection
