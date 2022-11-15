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
                                    </ul>
                                    @if (@Auth::user()->hasAnyRole('Admin'))
                                        <a class="btn btn-primary button_theme float-right"
                                            href="{{ route('studentss.create') }}">+
                                            Create New
                                        </a>
                                    @endif
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
