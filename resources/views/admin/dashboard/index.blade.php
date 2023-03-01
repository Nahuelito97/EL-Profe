@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div class="content-wrapper">
        <div class="row grid-margin">
            <div class="col-12">
                <div class="row">
                    <div class="col-md-12 grid-margin">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="page-title">
                                    <span class="text-uppercase">
                                        <h3>dashboard</h3>
                                    </span>
                                </h3>
                            </div>
                            <div class="card-body">
                                <h3 class="card-title mb-0">
                                    <span class="text-uppercase">
                                            bienvenido {{ Auth::user()->name }}
                                    </span>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card card-statistics">
                    <div class="card-body">
                        <div class="d-flex flex-column flex-md-row align-items-center justify-content-between">
                            <div class="statistics-item">
                                <p>
                                    <i class="icon-sm fa fa-user mr-2"></i>
                                    <span class="text-uppercase">
                                        total profesores
                                    </span>
                                </p>
                                <h2>{{ $profesors }}</h2>
                                <a href="{{ route('profesorss.index') }}"><label class="badge badge-outline-success badge-pill"> Mas Información</label></a>
                            </div>
                            <div class="statistics-item">
                                <p>
                                    <i class="icon-sm fa fa-user mr-2"></i>
                                    <span class="text-uppercase">
                                        total alumnos
                                    </span>
                                </p>
                                <h2>{{ $students }}</h2>
                                <a href="{{ route('studentss.index') }}"><label class="badge badge-outline-success badge-pill"> Mas Información</label></a>
                            </div>
                            <div class="statistics-item">
                                <p>
                                    <i class="icon-sm fas fa-hourglass-half mr-2"></i>
                                    <span class="text-uppercase">
                                        especialidades
                                    </span>
                                </p>
                                <h2>{{ $especialidades }}</h2>
                                <a href="{{ route('especialities.index') }}"><label class="badge badge-outline-success badge-pill"> Mas Información</label></a>
                            </div>
                            <div class="statistics-item">
                                <p>
                                    <i class="icon-sm fas fa-chart-line mr-2"></i>
                                    <span class="text-uppercase">
                                        materias
                                    </span>
                                </p>
                                <h2>{{ $materias }}</h2>
                                <a href="{{ route('materias.index') }}"><label class="badge badge-outline-success badge-pill"> Mas Información</label></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
