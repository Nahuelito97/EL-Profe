@extends('layouts.app')


@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <div class="content-header pt-3 pb-3 px-0 bg-white">
            <div class="container-fluid">

                <div class="callout callout-info">
                    <h5><i class="fas fa-info"></i> Students</h5>
                    <section class="content-header">
                        <div class="container-fluid">
                            <div class="row mb-2">
                                <div class="col-sm-6">
                                    <h1 class="m-0 text-dark"></h1>
                                    <br>
                                    <h1 class="all-tittles text-dark"> <small></small></h1>
                                </div>
                                <div class="col-sm-6">
                                    <ol class="breadcrumb float-sm-right">
                                        <li class="breadcrumb-item"><a href="{{ route('studentss.index') }}">Students.</a>
                                        </li>

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
                                    Bienvenido a la sección donde podra cargar los datos de un nuevo alumno.
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
                                    @if (session('Success'))
                                        <div class="alert alert-success">
                                            {{ session('Success') }}
                                        </div>
                                    @endif
                                    <br>
                                    <div class="card-body col-md-11 mx-auto px-0 ">

                                        <h3 class="text-secondary text-center">Datos Personales</h3>
                                        <br>

                                        <form method="POST" action="{{ route('studentss.store') }}"
                                            class="formulario-crear">
                                            @csrf
                                            <div class="row">
                                                <div
                                                    class="{{ Auth::user()->hasRole('SuperAdmin|Admin') ? 'col-md-6' : 'col-md-6' }}">
                                                    <div class="form-group">
                                                        <label for="name"
                                                            class="control-label text-semibold">Nombre<span
                                                                class="text-danger">*</span></label>
                                                        <input type="name" name="name"
                                                            class="form-control @error('name') is-invalid @enderror"
                                                            id="name" placeholder="Ingrese el nombre del estudiante">
                                                        @error('name')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group layout_subtitle">
                                                        {!! htmlspecialchars_decode(
                                                            Form::label('surname', 'Apellido <span class="text-danger">*</span>', ['class' => 'layout_subtitle']),
                                                        ) !!}
                                                        {{ Form::text('surname', $studentss ?? (('')->surname ?? null), ['id' => 'surname', 'placeholder' => 'Ingresa el Apellido', 'class' => 'form-control']) }}
                                                        @error('surname')
                                                            <span class="text-danger text-error">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div
                                                    class="{{ Auth::user()->hasRole('SuperAdmin|Admin') ? 'col-md-6' : 'col-md-6' }}">
                                                    <div class="form-group layout_subtitle">
                                                        {!! htmlspecialchars_decode(
                                                            Form::label('email', 'Email <span class="text-danger">*</span>', ['class' => 'layout_subtitle']),
                                                        ) !!}
                                                        {{ Form::text('email', $studentss ?? (('')->email ?? null), ['id' => 'email', 'placeholder' => 'Ingrese el Email del estudiante', 'class' => 'form-control']) }}
                                                        @error('email')
                                                            <span class="text-danger text-error">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div
                                                    class="{{ Auth::user()->hasRole('SuperAdmin|Admin') ? 'col-md-6' : 'col-md-6' }}">
                                                    <div class="form-group layout_subtitle">
                                                        {!! htmlspecialchars_decode(
                                                            Form::label('dni', 'Documento <span class="text-danger">*</span>', ['class' => 'layout_subtitle']),
                                                        ) !!}
                                                        {{ Form::text('dni', $studentss ?? (('')->dni ?? null), ['id' => 'dni', 'placeholder' => 'XX XXX XXX', 'class' => 'form-control']) }}
                                                        @error('dni')
                                                            <span class="text-danger text-error">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>

                                            </div>


                                            <div class="row">
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label for="telefono_id">Telefono <span
                                                                class="text-danger">*</span></label>
                                                        <select
                                                            class="custom-select rounded-0 @error('telefono_id') is-invalid @enderror"
                                                            id="telefono_id"name="telefono_id" data-toggle="tooltip"
                                                            data-placement="top" title="Select a Country">
                                                            <option value="#" selected disabled>Selecciona una Opción
                                                            </option>
                                                            @foreach ($telefono as $c)
                                                                @if (old('telefono_id') == $c->id)
                                                                    <option value="{{ $c->id }}" selected>
                                                                        {{ $c->caracteristica }}
                                                                    </option>
                                                                @else
                                                                    <option value="{{ $c->id }}">
                                                                        {{ $c->caracteristica }}
                                                                    </option>
                                                                @endif
                                                            @endforeach
                                                        </select>
                                                        @error('telefono_id')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="telefono_id"
                                                            class="control-label text-semibold">Numero<span
                                                                class="text-danger">*</span></label>
                                                        <input type="telefono_id" name="telefono_id"
                                                            class="form-control @error('telefono_id') is-invalid @enderror"
                                                            id="telefono_id" placeholder="XX XXX XXX">
                                                        @error('telefono_id')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="genero_id">Género <span
                                                                class="text-danger">*</span></label>
                                                        <select
                                                            class="custom-select rounded-0 @error('genero_id') is-invalid @enderror"
                                                            id="genero_id"name="genero_id" data-toggle="tooltip"
                                                            data-placement="top" title="Select a Country">
                                                            <option value="#" selected disabled>Selecciona una Opción
                                                            </option>
                                                            @foreach ($genero as $gen)
                                                                @if (old('genero_id') == $gen->id)
                                                                    <option value="{{ $gen->id }}" selected>
                                                                        {{ $gen->name }}
                                                                    </option>
                                                                @else
                                                                    <option value="{{ $gen->id }}">
                                                                        {{ $gen->name }}
                                                                    </option>
                                                                @endif
                                                            @endforeach
                                                        </select>
                                                        @error('pais_id')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="pais_id">País de residencia <span
                                                                class="text-danger">*</span></label>
                                                        <select
                                                            class="custom-select rounded-0 @error('pais_id') is-invalid @enderror"
                                                            id="pais_id"name="pais_id" data-toggle="tooltip"
                                                            data-placement="top" title="Select a Country">
                                                            <option value="#" selected disabled>Selecciona una Opción
                                                            </option>
                                                            @foreach ($country as $c)
                                                                @if (old('pais_id') == $c->id)
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
                                                        @error('pais_id')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="provincies_id">Parovincia <span
                                                                class="text-danger">*</span></label>
                                                        <select
                                                            class="custom-select rounded-0 @error('provincies_id') is-invalid @enderror"
                                                            id="provincies_id"name="provincies_id" data-toggle="tooltip"
                                                            data-placement="top" title="Select a Country">
                                                            <option value="#" selected disabled>Selecciona una Opción
                                                            </option>
                                                            @foreach ($province as $prov)
                                                                @if (old('provincies_id') == $prov->id)
                                                                    <option value="{{ $prov->id }}" seleprovted>
                                                                        {{ $prov->name }}
                                                                    </option>
                                                                @else
                                                                    <option value="{{ $prov->id }}">
                                                                        {{ $prov->name }}
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


                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="localities_id">Localidad <span
                                                                class="text-danger">*</span></label>
                                                        <select
                                                            class="custom-select rounded-0 @error('localities_id') is-invalid @enderror"
                                                            id="localities_id"name="localities_id" data-toggle="tooltip"
                                                            data-placement="top" title="Select a Country">
                                                            <option value="#" selected disabled>Selecciona una Opción
                                                            </option>
                                                            @foreach ($localities as $loc)
                                                                @if (old('localities_id') == $loc->id)
                                                                    <option value="{{ $loc->id }}" selected>
                                                                        {{ $loc->name }}
                                                                    </option>
                                                                @else
                                                                    <option value="{{ $loc->id }}">
                                                                        {{ $loc->name }}
                                                                    </option>
                                                                @endif
                                                            @endforeach
                                                        </select>
                                                        @error('localities_id')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group layout_subtitle">
                                                        {!! htmlspecialchars_decode(
                                                            Form::label('date_of_birth', 'Fecha de nacimiento <span
                                                            class="text-danger">*</span>', ['class' => 'layout_subtitle']),
                                                        ) !!}
                                                        {{ Form::date('date_of_birth', $studentss ?? (('')->date_of_birth ?? null), [
                                                            'id' => 'date_of_birth',
                                                            'placeholder' => 'Add a start date',
                                                            'max' => '2022-01-01',
                                                            'class' => 'form-control',
                                                        ]) }}
                                                        @error('date_of_birth')
                                                            <span class="text-danger text-error">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="row mt-2">
                                                <div class="col d-flex align-items-center justify-content-end">
                                                    <button type="reset" class="btn btn-info btn-rounded"
                                                        style="margin-right: 20px;"><i class="zmdi zmdi-roller"></i>
                                                        &nbsp;&nbsp;
                                                        Limpiar</button>
                                                    <button type="submit" class="btn btn-primary btn-rounded "><i
                                                            class="zmdi zmdi-floppy"></i> &nbsp;&nbsp; Registrar
                                                        Alumno</button>
                                                </div>
                                                <a type="button" class="btn btn-primary btn-rounded"
                                                    href="{{ route('studentss.index') }}">Back</a>
                                                <div>
                                        </form>
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
