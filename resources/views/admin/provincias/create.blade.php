@extends('layouts.app')


@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <div class="content-header pt-3 pb-3 px-0 bg-white">
            <div class="container-fluid">

                <div class="callout callout-info">
                    <h5><i class="fas fa-info"></i> Provincias</h5>
                    <div class="row mb-2">
                        <div class="col-md-11 mx-auto px-0 dashboard_route">
                            <p> > Dashboard <span class="ml-2"> > Provincias</span></p>
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
                                        Create Provincias
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
                                                <form method="POST" action="{{ route('provincias.store') }}"
                                                    class="formulario-crear">
                                                    @csrf
                                                    <div class="row">
                                                        <div
                                                            class="{{ Auth::user()->hasRole('SuperAdmin|Admin') ? 'col-md-6' : 'col-md-6' }}">
                                                            <div class="form-group layout_subtitle">
                                                                {!! htmlspecialchars_decode(Form::label('name', 'Name <span>*</span>', ['class' => 'layout_subtitle'])) !!}
                                                                {{ Form::text('name', $provincias ?? (('')->name ?? null), ['id' => 'name', 'placeholder' => 'Write the provincie name', 'class' => 'form-control']) }}
                                                                @error('name')
                                                                    <span
                                                                        class="text-danger text-error">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <nav aria-label="Page navigation example">
                                                                <div class="row">
                                                                    <div class="col clearfix">
                                                                        <ul class="pagination justify-content-center">
                                                                            <div class="form-group layout_subtitle">
                                                                                <div class="d-flex">
                                                                                    <div class="from-group has-feedback">
                                                                                        <label for="pais_id"
                                                                                            class="control-label text-semibold">Select
                                                                                            a Country</label>
                                                                                        <select id="pais_id"
                                                                                            class="form-control @error('pais_id') is-invalid @enderror"
                                                                                            name="pais_id"
                                                                                            data-toggle="tooltip"
                                                                                            data-placement="top"
                                                                                            title="Select a Country">
                                                                                            <option value="#" selected
                                                                                                disabled>Country</option>
                                                                                            @foreach ($countrys as $c)
                                                                                                @if (old('pais_id') == $c->id)
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
                                                                                        @error('pais_id')
                                                                                            <span class="invalid-feedback"
                                                                                                role="alert">
                                                                                                <strong>{{ $message }}</strong>
                                                                                            </span>
                                                                                        @enderror
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </nav>
                                                        </div>

                                                    </div>

                                                    <div class="row mt-2">
                                                        <div class="col d-flex align-items-center justify-content-end">
                                                            <button type="reset" class="btn btn-info btn-rounded"
                                                                style="margin-right: 20px;"><i
                                                                    class="zmdi zmdi-roller"></i> &nbsp;&nbsp;
                                                                Limpiar</button>
                                                            <button type="submit" class="btn btn-primary btn-rounded "><i
                                                                    class="zmdi zmdi-floppy"></i> &nbsp;&nbsp; Registrar
                                                                Provincias</button>
                                                        </div>
                                                        <a type="button" class="btn btn-primary btn-rounded"
                                                        href="{{ route('provincias.index') }}">Back</a>
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
