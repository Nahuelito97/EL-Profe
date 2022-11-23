@extends('layouts.app')


@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        @include('admin.students.section')


        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-md-12">
                        <!-- general form elements disabled -->
                        <div class="card card-warning">
                            <div class="card-header">
                                <h3 class="card-title">Listado de Alumnos.</h3>

                            </div>

                            <!-- /.card-header -->
                            <div class="card-body">
                                @include('admin.students.table')
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination justify-content-center">
                                        {{ $studentss->links() }}

                                    </ul <div class="col-xs-12">
                                    <p class="text-center">
                                        @if (@Auth::user()->hasAnyRole('Admin'))
                                            <a href="{{ route('studentss.create') }}" class="mr-1 btn btn-sm btn-success"
                                                title="Crear Nuevo"> <i class="fas fa-user-plus"></i> </a>
                                        @endif

                                    </p>
                            </div>
                            </nav>

                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
    </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    </div>
@endsection
