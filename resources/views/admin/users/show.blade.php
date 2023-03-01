@extends('layouts.app')


@section('content')
    <div class="content-wrapper">
        <div class="content-header pt-3 pb-3 px-0 bg-white">
            <div class="container-fluid">

                <div class="callout callout-info">
                    <h3>Users</h3>
                    <section class="content-header">
                        <div class="container-fluid">                       
                          <div class="col-xs-12 col-sm-4 col-md-3">
                              <img src="{{asset(
                                'front-end/assets/img/user-sesion.png')}}" alt="user" class="img-responsive center-box" style="max-width: 110px;">
                          </div>
                          <br>
                          <div class="col-xs-12 col-sm-8 col-md-8 text-justify lead">
                           <h4>
                               Bienvenido a la sección donde se muestran los datos del Usuario.
                           </h4>
                           <br>
                          </div>
                        </div><!-- /.container-fluid -->
                      </section>
                </div>
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <br>
        <div class="container">
            <div class="margin:0px auto">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body text-center">
                                <div class="col-lg-6">
                                    <div style="height: 170px; width: 150px;" class="m-auto">
                                        <img src="{{ asset($user->image) }}" alt=""
                                            class="img-fluid rounded-circle img-rounded">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="col-lg-4">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <h3>{{ $user->name }}</h3>
                                        </div>
                                    </div>


                                    <div class="py-4">
                                        <p class="clearfix">
                                        <h5><span class="float-left">
                                                Apellido
                                            </span>
                                            <span class="float-right text-muted">
                                                {{ $user->surname }}
                                            </span>
                                        </h5>
                                        </p>
                                        <p class="clearfix">
                                        <h5><span class="float-left">
                                                Telefono
                                            </span>
                                            <span class="float-right text-muted">
                                                {{ $user->phone }}
                                            </span>
                                        </h5>
                                        </p>
                                        <p class="clearfix">
                                        <h5><span class="float-left">
                                                Apellido
                                            </span>
                                            <span class="float-right text-muted">
                                                {{ $user->email }}
                                            </span>
                                        </h5>
                                        </p>
                                        <p class="clearfix">
                                        <h5><span class="float-left">
                                                Dni
                                            </span>
                                            <span class="float-right text-muted">
                                                {{ $user->dni }}
                                            </span>
                                        </h5>
                                        </p>
                                    </div>
                                    <br>
                                    <br>
                                    <a href="{{ route('users.index') }}" class="btn btn-primary btn-rounded">Volver</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
