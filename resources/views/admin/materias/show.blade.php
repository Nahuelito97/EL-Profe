@extends('layouts.app')


@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <div class="content-header pt-3 pb-3 px-0 bg-white">
            <div class="container-fluid">

                <div class="callout callout-info">
                    <div class="col-xs-12 col-sm-4 col-md-3">
                        <img src="{{ asset('front-end/assets/img/category.png') }}" alt="user"
                            class="img-responsive center-box" style="max-width: 110px;">
                    </div>
                    <div class="col-xs-12 col-sm-8 col-md-8 text-justify lead">
                        <h4>
                            Bienvenido a la sección donde se encuentra el listado de las materias que se dictan es la
                            institucion, al editar una materia podra asocialra a un profesor..
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

                    <div class="col-md-12 card bg-white mx-auto card_list border-0">
                        <div class="table-responsive">
                            <div class="col-md-12 card-body pt-3">
                                <div class="card_layout pt-3">
                                    <h5>Crear Materia</h5>
                                   
                                    <div class="card-body col-md-11 mx-auto px-0 ">
                                        <div class="card card-default">
                                            <div class="card-body">
                                                <div
                                                    class="card_layout_header border-0 layout_title col-md-11 mx-auto px-0 pt-3">
                                                    <h5>
                                                        Datos de una Materia</h5>
                                                </div>
                                                <form class="" method="post"
                                                    action="{{ route('materias.edit', $materias) }}">

                                                    {{ csrf_field() }}
                                                    {{ method_field('put') }}
                                                    <div class="card-body">

                                                        <div class="form-group">
                                                            <label for="name" class="control-label text-semibold">
                                                                <h5>Nombre</h5>
                                                            </label>
                                                            <input type="name" name="name" class="form-control"
                                                                value="{{ $materias->name }}"  disabled
                                                                placeholder="Ingrese un nombre para la materia">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputPassword1"
                                                                class="control-label text-semibold">
                                                                <h5>Descripción</h5>
                                                            </label>
                                                            <textarea name="description" id="description" rows="4" class="form-control"  disabled="disabled"
                                                                placeholder="Ingrese una descripción para la materia"> {{ $materias->description }} </textarea>
                                                        </div>
                                                        <div class="from-group has-feedback">
                                                            <label for="profesor_id" class="control-label text-semibold">
                                                                <h5>Seleccione el Profesor <span class="text-danger">*</span></h5>
                                                            </label>
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
                                                    <button type="submit"
                                                        class="btn btn-lg btn-primary bt-rounded">Actualizar</button>
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
