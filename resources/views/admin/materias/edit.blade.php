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
                                    Bienvenido a la sección donde podra editar los datos de una materia, y Asociarlos a un
                                    Profesor.
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
                                    <div class="card_layout_header border-0 layout_title col-md-11 mx-auto px-0 pt-3">
                                        <h5>Editar una Materia</h5>
                                    </div>
                                    @if (session('Info'))
                                        <div class="alert alert-success">
                                            {{ session('Info') }}
                                        </div>
                                    @endif
                                    <div class="card-body col-md-11 mx-auto px-0 ">
                                        <div class="card card-default">
                                            <div class="card-body">
                                                <div
                                                    class="card_layout_header border-0 layout_title col-md-11 mx-auto px-0 pt-3">
                                                    <h5>
                                                        Campos Requeridos <span class="text-danger">*</span></h5>
                                                </div>
                                                <form class="" method="post"
                                                    action="{{ route('materias.update', $materias) }}">

                                                    {{ csrf_field() }}
                                                    {{ method_field('put') }}
                                                    <div class="card-body">

                                                        <div class="form-group">
                                                            <label for="name" class="control-label text-semibold">
                                                                <h5>Nombre <span class="text-danger">*</span></h5>
                                                            </label>
                                                            <input type="name" name="name" class="form-control"
                                                                value="{{ $materias->name }}"
                                                                placeholder="Ingrese un nombre para la materia">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputPassword1"
                                                                class="control-label text-semibold">
                                                                <h5>Descripción <span class="text-danger">*</span></h5>
                                                            </label>
                                                            <textarea name="description" id="description" rows="4" class="form-control"
                                                                placeholder="Ingrese una descripción para la materia"> {{ $materias->description }} </textarea>
                                                        </div>
                                                        <div class="from-group has-feedback">
                                                            <label for="profesor_id" class="control-label text-semibold">
                                                                <h5>Seleccione el Profesor <span
                                                                        class="text-danger">*</span></h5>
                                                            </label>
                                                            <select id="profesor_id"
                                                                class="form-control @error('profesor_id') is-invalid @enderror"
                                                                name="profesor_id" data-toggle="tooltip"
                                                                data-placement="top" title="Select a Provincia">
                                                                <option value="#" selected disabled>Todos..</option>
                                                                @foreach ($profesores as $profesor)
                                                                    @if (old('profesor_id') == $profesor->id)
                                                                        <option value="{{ $profesor->id }}" selected>
                                                                            {{ $profesor->name }}
                                                                        </option>
                                                                    @else
                                                                        <option value="{{ $profesor->id }}">
                                                                            {{ $profesor->name }}
                                                                        </option>
                                                                    @endif
                                                                @endforeach
                                                            </select>
                                                            @error('profesor_id')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    {!! Form::submit('Actualizar Materia', ['class' => 'btn btn-primary formulario-updated btn-rounded']) !!}
                                                    <a class="btn btn-primary btn-rounded"
                                                        href="{{ route('materias.index') }}">Back</a>


                                                    {!! Form::close() !!}
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
