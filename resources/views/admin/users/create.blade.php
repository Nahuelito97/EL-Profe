@extends('layouts.app')


@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <div class="content-header pt-3 pb-3 px-0 bg-white">
            <div class="container-fluid">

                <div class="callout callout-info">
                    <h3>Users</h3>
                    <section class="content-header">
                        <div class="container-fluid">
                            <div class="col-xs-12 col-sm-4 col-md-3">
                                <img src="{{ asset('front-end/assets/img/user-sesion.png') }}"
                                    alt="user" class="img-responsive center-box" style="max-width: 110px;">
                            </div>
                            <br>
                            <div class="col-xs-12 col-sm-8 col-md-8 text-justify lead">
                                <h4>
                                    Bienvenido a la sección donde se encuentra el listado de los usuarios registrados.
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
                                    <h5>Crear Usuarios</h5>

                                    @if (session('Success'))
                                        <div class="alert alert-success">
                                            {{ session('Success') }}
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

                                                @include('admin.users.fields')

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
        </section>
        <!-- /.content -->


    </div>
@endsection
