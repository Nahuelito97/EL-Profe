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
                    <div class="col-xs-12 col-sm-8 col-md-8 text-justify lead">
                        <h4>
                            Bienvenido a la sección donde podra editar a un país..
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
                                    <div class="card_layout_header border-0 layout_title col-md-11 mx-auto px-0 pt-3">
                                        <h5>Editar un País</h5>
                                    </div>
                                    @if (session('Info'))
                                        <div class="alert alert-success">
                                            {{ session('Info') }}
                                        </div>
                                    @endif
                                    <div class="card-body col-md-11 mx-auto px-0 ">
                                        <div class="card card-default">

                                            <div class="card-body">
                                                <form class="" method="post"
                                                    action="{{ route('todos.update', $country) }}">

                                                    {{ csrf_field() }}
                                                    {{ method_field('put') }}
                                                    <div class="card-body">

                                                        <div class="form-group">
                                                            <label for="name" class="control-label text-semibold">
                                                                <h5>Nombre: <span class="text-danger">*</span>
                                                                </h5>
                                                            </label>
                                                            <input type="name" name="name" class="form-control"
                                                                value="{{ $country->name }}"
                                                                placeholder="Ingrese un nuevo nombe para el País">
                                                        </div>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary btn-rounded"><i
                                                            class="zmdi zmdi-floppy"></i> &nbsp;&nbsp; +
                                                        Actualizar</button>
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
