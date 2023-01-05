@extends('layouts.app')


@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <div class="content-header pt-3 pb-3 px-0 bg-white">
            <div class="container-fluid">
                <div class="row mb-2">

                    <div class="col-md-11 mx-auto px-0 dashboard_route">
                        <p> > Dashboard <span class="ml-2"> > Profesors</span><span class="ml-2"> >Edit</span></p>

                    </div>
                </div><!-- /.row -->
                <div class="col-md-11 mx-auto pt-2 pb-2 px-0 d-flex align-items-center justify-content-between"
                    style="height: 60px">
                    <h1 class="section_title mb-0">Profesors</h1>

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
                                        Profesor Info

                                    </div>
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
                                                <div class="row">
                                                    <div
                                                        class="col-12 col-sm-12 col-md-12 d-flex align-items-stretch flex-column">
                                                        <div class="card bg-light d-flex flex-fill">
                                                            <div class="card-header text-muted border-bottom-0">

                                                                <h2 class="lead"><b> {{ $profesorss->name }}</b></h2>
                                                            </div>
                                                            <div class="card-body pt-0">
                                                                <div class="row">
                                                                    <div class="col-7">
                                                                        <p class="text-muted text-sm">
                                                                            <b>Surname: </b> {{ $profesorss->surname }}
                                                                        </p>
                                                                        <p class="text-muted text-sm">
                                                                            <b>Dni: </b> {{ $profesorss->dni }}
                                                                        </p>
                                                                        <p class="text-muted text-sm">
                                                                            <b>DateofBirth:
                                                                            </b>{{ date('d-m-Y', strtotime($profesorss->date_of_birth)) }}
                                                                        </p>
                                                                        <p class="text-muted text-sm">
                                                                            <b>Email: </b>{{ $profesorss->email }}
                                                                        </p>
                                                                        <p class="text-muted text-sm">
                                                                            <b>DateofAdress:
                                                                            </b> {{ date('d-m-Y', strtotime($profesorss->date_of_address)) }}
                                                                        </p>
                                                                        <p class="text-muted text-sm">
                                                                            <b>Especiality:
                                                                            </b> {{ ($profesorss->especialitis->name) }}
                                                                        </p>
                                                                        <h5>
                                                                            </h2>
                                                                            <h5>
                                                                                </h2>
                                                                                <ul class="ml-4 mb-0 fa-ul text-muted">
                                                                                    <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span>
                                                                                        <b>Country:</b>
                                                                                        {{ $profesorss->pais->name }}
                                                                                        <b>Address:</b>
                                                                                        {{ $profesorss->provincies->name }},
                                                                                        {{ $profesorss->localities->name }},
                                                                                        {{ $profesorss->localities->cod_post }},

                                                                                        {{ $profesorss->directions->name }},
                                                                                        {{ $profesorss->directions->number }}


                                                                                    </li>
                                                                                    <li class="small"><span
                                                                                            class="fa-li"><i
                                                                                                class="fas fa-lg fa-phone"></i></span>
                                                                                        <b>Phone</b> #:
                                                                                        {{ $profesorss->phone }}
                                                                                    </li>
                                                                                </ul>
                                                                    </div>
                                                                    <div class="col-5 text-center">
                                                                        <img src="{{ asset('admilt/dist/img/img/user02.png') }}"
                                                                            alt="pdf" class="img-responsive center-box"
                                                                            style="max-width: 250px;">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a class="btn btn-primary btn-rounded"
                                                href="{{ route('profesorss.index') }}">Back</a>
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
