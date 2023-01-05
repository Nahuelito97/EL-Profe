@extends('layouts.app')


@section('content')
    <div class="content-wrapper">
        <div class="content-header pt-3 pb-3 px-0 bg-white">
            <div class="container-fluid">
                <div class="row mb-2">

                    <div class="col-md-11 mx-auto px-0 dashboard_route">
                        <p> > Dashboard <span class="ml-2"> >Users</span><span class="ml-2"></span></p>

                    </div>
                </div><!-- /.row -->
                @if (session('success_message'))
                    <div class="alert alert-success">
                        {{ session('Title') }}
                    </div>
                @endif
                <div class="col-md-11 mx-auto pt-2 pb-2 px-0 d-flex align-items-center justify-content-between"
                    style="height: 60px">
                    <h1 class="section_title mb-0">Userss</h1>

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
                                        Edit Users | Assign Role

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
                                                    <div class="col-md-2">
                                                        <p class="h5">Name:</p>
                                                        <p class="form-control">{{ $user->name }}</p>
                                                    </div>
                                                </div>
                                                {!! Form::model($user, ['route' => ['users.update', $user], 'method' => 'put']) !!}
                                                @foreach ($roles as $role)
                                                    <div>
                                                        <label>
                                                            {!! Form::checkbox('roles[]', $role->id, null, ['class' => 'mr-1']) !!}
                                                            {{ $role->name }}
                                                        </label>
                                                    </div>
                                                @endforeach

                                                {!! Form::submit('Asignar rol', ['class' => 'btn btn-primary mt-2']) !!}
                                                {!! Form::close() !!}
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
