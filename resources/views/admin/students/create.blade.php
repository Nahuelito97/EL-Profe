@extends('layouts.app')


@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <div class="content-header pt-3 pb-3 px-0 bg-white">
            <div class="container-fluid">

                <div class="callout callout-info">
                    <h5><i class="fas fa-info"></i> Students</h5>
                    <div class="row mb-2">
                        <div class="col-md-11 mx-auto px-0 dashboard_route">
                            <p> > Dashboard <span class="ml-2"> > Students</span></p>
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
                                        Create Student
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
                                                <form method="POST" action="{{ route('studentss.store') }}"
                                                    class="formulario-crear">
                                                    @csrf
                                                    <div class="row">
                                                        <div
                                                            class="{{ Auth::user()->hasRole('SuperAdmin|Admin') ? 'col-md-6' : 'col-md-6' }}">
                                                            <div class="form-group layout_subtitle">
                                                                {!! htmlspecialchars_decode(Form::label('name', 'Name <span>*</span>', ['class' => 'layout_subtitle'])) !!}
                                                                {{ Form::text('name', $studentss ?? (('')->name ?? null), ['id' => 'name', 'placeholder' => 'Write the student name', 'class' => 'form-control']) }}
                                                                @error('name')
                                                                    <span
                                                                        class="text-danger text-error">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group layout_subtitle">
                                                                {!! htmlspecialchars_decode(Form::label('surname', 'Surame <span>*</span>', ['class' => 'layout_subtitle'])) !!}
                                                                {{ Form::text('surname', $studentss ?? (('')->surname ?? null), ['id' => 'surname', 'placeholder' => 'Write the student surname', 'class' => 'form-control']) }}
                                                                @error('surname')
                                                                    <span
                                                                        class="text-danger text-error">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div
                                                            class="{{ Auth::user()->hasRole('SuperAdmin|Admin') ? 'col-md-6' : 'col-md-6' }}">
                                                            <div class="form-group layout_subtitle">
                                                                {!! htmlspecialchars_decode(Form::label('email', 'Email <span>*</span>', ['class' => 'layout_subtitle'])) !!}
                                                                {{ Form::text('email', $studentss ?? (('')->email ?? null), ['id' => 'email', 'placeholder' => 'Write the student mail', 'class' => 'form-control']) }}
                                                                @error('email')
                                                                    <span
                                                                        class="text-danger text-error">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group layout_subtitle">
                                                                {!! htmlspecialchars_decode(Form::label('phone', 'Phone <span>*</span>', ['class' => 'layout_subtitle'])) !!}
                                                                {{ Form::text('phone', $studentss ?? (('')->phone ?? null), ['id' => 'phone', 'placeholder' => 'Write the student Phone', 'class' => 'form-control']) }}
                                                                @error('phone')
                                                                    <span
                                                                        class="text-danger text-error">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div
                                                            class="{{ Auth::user()->hasRole('SuperAdmin|Admin') ? 'col-md-4' : 'col-md-4' }}">
                                                            <div class="form-group layout_subtitle">
                                                                {!! htmlspecialchars_decode(Form::label('dni', 'Dni <span>*</span>', ['class' => 'layout_subtitle'])) !!}
                                                                {{ Form::text('dni', $studentss ?? (('')->dni ?? null), ['id' => 'dni', 'placeholder' => 'write the student dni', 'class' => 'form-control']) }}
                                                                @error('dni')
                                                                    <span
                                                                        class="text-danger text-error">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <br>
                                                        <div class="col-md-7">
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
                                                                                            @foreach ($country as $c)
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
                                                                    <div class="col clearfix">
                                                                        <div class="mx-auto">
                                                                            <div class="form-group layout_subtitle">
                                                                                <div class="d-flex">
                                                                                    <div class="from-group has-feedback">
                                                                                        <label for="provincies_id"
                                                                                            class="control-label text-semibold">Select
                                                                                            a Province</label>
                                                                                        <select id="provincies_id"
                                                                                            class="form-control @error('provincies_id') is-invalid @enderror"
                                                                                            name="provincies_id"
                                                                                            data-toggle="tooltip"
                                                                                            data-placement="top"
                                                                                            title="">
                                                                                            <option value="#" selected
                                                                                                disabled>Province</option>
                                                                                            @foreach ($province as $prov)
                                                                                                @if (old('provincies_id') == $prov->id)
                                                                                                    <option
                                                                                                        value="{{ $prov->id }}"
                                                                                                        seleprovted>
                                                                                                        {{ $prov->name }}
                                                                                                    </option>
                                                                                                @else
                                                                                                    <option
                                                                                                        value="{{ $prov->id }}">
                                                                                                        {{ $prov->name }}
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
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col clearfix">
                                                                        <ul class="pagination justify-content-end">
                                                                            <div class="form-group layout_subtitle">
                                                                                <div class="d-flex">
                                                                                    <div class="from-group has-feedback">
                                                                                        <label for="localities_id"
                                                                                            class="control-label text-semibold">Select
                                                                                            a Locality</label>
                                                                                        <select id="localities_id"
                                                                                            class="form-control @error('localities_id') is-invalid @enderror"
                                                                                            name="localities_id"
                                                                                            data-toggle="tooltip"
                                                                                            data-placement="top"
                                                                                            title="">
                                                                                            <option value="#" selected
                                                                                                disabled>Locality</option>
                                                                                            @foreach ($localities as $loc)
                                                                                                @if (old('localities_id') == $loc->id)
                                                                                                    <option
                                                                                                        value="{{ $loc->id }}"
                                                                                                        selected>
                                                                                                        {{ $loc->name }}
                                                                                                    </option>
                                                                                                @else
                                                                                                    <option
                                                                                                        value="{{ $loc->id }}">
                                                                                                        {{ $loc->name }}
                                                                                                    </option>
                                                                                                @endif
                                                                                            @endforeach
                                                                                        </select>
                                                                                        @error('localities_id')
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

                                                                    <div class="col clearfix">
                                                                        <ul class="pagination justify-content-end">
                                                                            <div class="form-group layout_subtitle">
                                                                                <div class="d-flex">
                                                                                    <div class="from-group has-feedback">
                                                                                        <label for="directions_id"
                                                                                            class="control-label text-semibold">Select
                                                                                            a DIrection</label>
                                                                                        <select id="directions_id"
                                                                                            class="form-control @error('directions_id') is-invalid @enderror"
                                                                                            name="directions_id"
                                                                                            data-toggle="tooltip"
                                                                                            data-placement="top"
                                                                                            title="">
                                                                                            <option value="#" selected
                                                                                                disabled>Directions</option>
                                                                                            @foreach ($directions as $dir)
                                                                                                @if (old('directions_id') == $dir->id)
                                                                                                    <option
                                                                                                        value="{{ $dir->id }}"
                                                                                                        selected>
                                                                                                        {{ $dir->name }}
                                                                                                    </option>
                                                                                                @else
                                                                                                    <option
                                                                                                        value="{{ $dir->id }}">
                                                                                                        {{ $dir->name }}
                                                                                                    </option>
                                                                                                @endif
                                                                                            @endforeach
                                                                                        </select>
                                                                                        @error('directions_id')
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

                                                    <div class="row">
                                                        <div class="col-md-12 d-flex align-items-bottom mb-3">
                                                            <div
                                                                class="col-md-1 segmentation_subtitle mt-3 px-0 segmentation">
                                                            </div>
                                                            <div class="form-group col-md-11 my-0 segmentation_border">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group layout_subtitle">
                                                                {!! htmlspecialchars_decode(
                                                                    Form::label('date_of_birth', 'DateofBirth <span>*</span>', ['class' => 'layout_subtitle']),
                                                                ) !!}
                                                                {{ Form::date('date_of_birth', $studentss ?? (('')->date_of_birth ?? null), ['id' => 'date_of_birth', 'placeholder'
                                                                => 'Add a start date', 'max' => "2022-01-01",'class' => 'form-control']) }}
                                                                @error('date_of_birth')
                                                                    <span
                                                                        class="text-danger text-error">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group layout_subtitle">
                                                                {!! htmlspecialchars_decode(
                                                                    Form::label('date_of_address', 'DateOfAdress <span>*</span>', ['class' => 'layout_subtitle']),
                                                                ) !!}
                                                                {{ Form::date('date_of_address', $studentss ?? (('')->date_of_address ?? null), ['id' => 'date_of_address', 'placeholder' => 'Add a finish date',
                                                                'max' => "2022-22-12", 'class' => 'form-control']) }}
                                                                @error('date_of_address')
                                                                    <span
                                                                        class="text-danger text-error">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-12 d-flex align-items-bottom mb-3">
                                                            <div
                                                                class="col-md-1 segmentation_subtitle mt-3 px-0 segmentation">
                                                            </div>
                                                            <div class="form-group col-md-11 my-0 segmentation_border">
                                                            </div>
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
                </div>
            </div>
            <!-- /.row -->

        </section>
        <!-- /.content -->

    </div>
@endsection
