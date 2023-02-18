@extends('layouts.app')


@section('content')
    <div class="content-wrapper">
        <div class="content-header pt-3 pb-3 px-0 bg-white">
            <div class="container-fluid">
                <div class="row mb-2">

                    <div class="col-md-11 mx-auto px-0 dashboard_route">
                        <p> > Dashboard <span class="ml-2"> >Ciudades</span><span class="ml-2"></span></p>

                    </div>
                </div><!-- /.row -->
                <div class="col-md-11 mx-auto pt-2 pb-2 px-0 d-flex align-items-center justify-content-between"
                    style="height: 60px">
                    <h1 class="section_title mb-0">Ciudades</h1>
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
                                        Lista de Ciudades
                                        @if (@Auth::user()->hasAnyRole('SuperAdmin'))
                                        <a class="btn btn-primary button_theme float-right" href="{{ route('cities.create') }}">+
                                            Create New</a>
                                        @endif
                                    </div>
                                    <br>
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
                                                @if (count($localidadess))
                                                <table class="table table-hover border-0 w-100 responsive" id="especialities">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Name</th>
                                                            <th>CP</th>
                                                            <th>Provincia</th>
                                                            <th>Acciones</th>
                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                        @foreach ($localidadess as $localidades)
                                                            <tr>
                                                                <td>{{$localidades->id}}</td>
                                                                <td>{{$localidades->name}}</td>
                                                                <td>{{$localidades->cod_post}}</td>
                                                                <td>{{$localidades->provincies->name}}</td>

                                                                <td class="d-flex">
                                                                    <a href="{{ route('cities.edit', [$localidades->id]) }}" class="mr-1 btn btn-sm btn-primary"  title="Edit">Edit</a>
                                                                    <form action="{{ route('cities.destroy', [$localidades->id]) }}" class="mr-1 formulario-eliminar"
                                                                        method="POST" title="Delete">
                                                                        @method('DELETE')
                                                                        @csrf
                                                                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                                                    </form>

                                                                    {{-- <a href="{{ route('category.show', [$category->id]) }}" class="mr-1 btn btn-sm btn-success"> <i class="fas fa-eye"></i> </a> --}}
                                                                </td>

                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>

                                                @else
                                                    <div><span>No data</span></div>
                                                @endif
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

@section('js')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @if (session('delete') == 'OK')
        <script>
            Swal.fire(
                'Deleted!',
                'Your file has been deleted.',
                'success'
            )
        </script>
    @endif

    <script>
        $('.formulario-eliminar').submit(function(e) {
            e.preventDefault();
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    this.submit();
                }
            })
        });
    </script>
@endsection
