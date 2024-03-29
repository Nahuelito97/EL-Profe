@extends('layouts.app')


@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <div class="content-header pt-3 pb-3 px-0 bg-white">
            <div class="container-fluid">

                <div class="callout callout-info">
                    <div class="col-xs-12 col-sm-4 col-md-3">
                        <img src="{{ asset('front-end/assets/img/user03.png') }}" alt="user"
                            class="img-responsive center-box" style="max-width: 110px;">
                    </div>
                    <div class="col-xs-12 col-sm-8 col-md-8 text-justify lead">
                        <h4>
                            Bienvenido a la sección donde podra ver la información adicional del Profesor.
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
                                    <h5>Información del Profesor</h5>
                                    <div class="card-body col-md-11 mx-auto px-0 ">
                                        <div class="row">
                                            <div class="col-md-8 grid-margin mx-auto px-0 ">
                                                <div class="card text-center">
                                                    <div class="card-body">
                                                        <img src="{{ asset('admilt/dist/img/img/user02.png') }}"
                                                            class="img-lg rounded-circle mb-2" alt="profile image" />
                                                        <h4>{{ $profesorss->name }}</h4>
                                                        <p class="text-muted">Profesor</p>


                                                        <div class="border-top pt-3">
                                                            <div class="row">
                                                                <h5>Datos Personales</h5>
                                                                <div class="border-bottom py-4">

                                                                    <div>
                                                                        <label class="badge badge-outline-dark"><b>Apellido:
                                                                            </b> {{ $profesorss->surname }}</label>
                                                                        <label class="badge badge-outline-dark"><b>Dni: </b>
                                                                            {{ $profesorss->dni }}</label>
                                                                        <label class="badge badge-outline-dark">
                                                                            <b>Fecha de Nacimiento:
                                                                            </b>{{ date('d-m-Y', strtotime($profesorss->date_of_birth)) }}</label>
                                                                        <label class="badge badge-outline-dark"><b>Correo:
                                                                            </b>{{ $profesorss->email }}</label>
                                                                        <label class="badge badge-outline-dark"><b>Fecha de
                                                                                Ingreso:
                                                                            </b>
                                                                            {{ date('d-m-Y', strtotime($profesorss->created_at)) }}</label>

                                                                        <label class="badge badge-outline-dark">
                                                                            <b>Pais:</b>
                                                                            @if (!empty($profesorss->pais))
                                                                                {{ $profesorss->pais->name }}
                                                                            @endif
                                                                        </label>
                                                                        <label class="badge badge-outline-dark"><b>Provincia:
                                                                            </b>
                                                                            @if (!empty($profesorss->provincies))
                                                                                {{ $profesorss->provincies->name }}
                                                                            @endif


                                                                        </label>
                                                                        <label class="badge badge-outline-dark">
                                                                            <b>Localidad:
                                                                            </b>
                                                                            @if (!empty($profesorss->localities))
                                                                                {{ $profesorss->localities->name }}
                                                                            @endif
                                                                        </label>
                                                                        <label class="badge badge-outline-dark"><b>Especiaidad:
                                                                        </b>
                                                                        @if (!empty($profesorss->especialitis))
                                                                            {{ $profesorss->especialitis->name }}
                                                                        @endif


                                                                    </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <a class="btn btn-primary btn-rounded"
                                                            href="{{ route('profesorss.index') }}">Volver</a>
                                                    </div>
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
