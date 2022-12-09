@extends('layouts.app')


@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <div class="content-header pt-3 pb-3 px-0 bg-white">
            <div class="container-fluid">
                <div class="row mb-2">
                    @include('admin.students.section')
                    <div class="col-md-11 mx-auto px-0 dashboard_route">
                        <p> > Dashboard <span class="ml-2"> > Students</span></p>
                    </div>
                </div><!-- /.row -->
                <div class="col-md-11 mx-auto pt-2 pb-2 px-0 d-flex align-items-center justify-content-between"
                    style="height: 60px">
                    <h1 class="section_title mb-0">Students</h1>
                    @can('admin.studentss.create')
                        <a class="btn btn-primary button_theme float-right" href="{{ route('studentss.create') }}">+
                            Create New</a>
                    @endcan


                </div>
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="card_layout pb-5 pt-3">

                    <div class="col-md-11 card bg-white mx-auto card_list border-0">
                        <div class="table-responsive">
                            <div class="col-md-12 card-body pt-3">
                                @if (count($studentss))
                                    @include('admin.students.table')
                                @else
                                    <div><span>No data</span></div>
                                @endif
                            </div>
                            {{ $studentss->links() }}

                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->

        </section>
        <!-- /.content -->
    </div>
@endsection
