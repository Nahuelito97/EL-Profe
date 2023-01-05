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
                @if (session('info'))
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h5><i class="icon fas fa-check"></i>{{ session('info') }}</h5>
                    </div>
                @endif
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
                                        Edit a Profesor
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
                                                    <div class="col-md-6">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <p class="h5">Name:</p>
                                                                <p class="form-control">{{ $profesorss->name }}</p>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <p class="h5">SurName:</p>
                                                                <p class="form-control">{{ $profesorss->surname }}</p>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <p class="h5">Dni:</p>
                                                                <p class="form-control">{{ $profesorss->dni }}</p>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <p class="h5">DatheOfBirth:</p>
                                                                <p class="form-control">{{ $profesorss->date_of_birth }}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <p class="h5">DatheOfAdress:</p>
                                                                <p class="form-control">{{ $profesorss->date_of_address }}
                                                                </p>
                                                            </div>
                                                        </div>
                                                        {!! Form::model($profesorss, ['route' => ['profesorss.update', $profesorss], 'method' => 'put']) !!}
                                                        <div class="form-group"> {{-- Laravel Collective recomienda colocar los elementos como label e input dentro de un div de tipo form-group para la separación. --}}
                                                            {!! Form::label('email', 'Email') !!} {{-- form control es de bootstrap y le da estilo al input. --}}
                                                            {!! Form::text('email', null, [
                                                                'class' => 'form-control',
                                                                'placeholder' => 'Ingrese el correo nuevo correo electronico',
                                                            ]) !!}

                                                            @error('email')
                                                                {{-- En caso de error de validación, enviamos un mensaje de error. --}}
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror

                                                        </div>

                                                        <div class="form-group"> {{-- Laravel Collective recomienda colocar los elementos como label e input dentro de un div de tipo form-group para la separación. --}}
                                                            {!! Form::label('phone', 'Phone') !!} {{-- form control es de bootstrap y le da estilo al input. --}}
                                                            {!! Form::text('phone', null, [
                                                                'class' => 'form-control',
                                                                'placeholder' => 'Ingrese el nuevo numero de telefono',
                                                            ]) !!}

                                                            @error('phone')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror

                                                        </div>

                                                        {!! Form::submit('Update Profesor', ['class' => 'btn btn-primary']) !!}
                                                        <a class="btn btn-primary btn-rounded"
                                                            href="{{ route('profesorss.index') }}">Back</a>


                                                        {!! Form::close() !!}

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
