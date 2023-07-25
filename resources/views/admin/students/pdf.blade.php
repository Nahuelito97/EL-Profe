@extends('layouts.app')


@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <div class="content-header pt-3 pb-3 px-0 bg-white">
            <div class="container-fluid">

                <div class="callout callout-info">
                    <div class="col-xs-12 col-sm-4 col-md-3">
                        <img src="{{ asset('front-end/assets/img/user03.png') }}" alt="user"
                            class="img-responsive center-box" style="max-width: 110px;">
                    </div>
                    <div class="col-xs-12 col-sm-8 col-md-8 text-justify lead">
                        <h4>
                            Bienvenido a la sección donde se encuentra el listado de las materias que se dictan es la
                            institucion, al editar una materia podra asocialra a un profesor..
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
                                        <h5>Lista Alumnos</h5>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="card px-2">
                                                    <div class="card-body">
                                                        <div class="container-fluid">
                                                            <h3 class="text-right my-5">Invoice&nbsp;&nbsp;#INV-17</h3>
                                                            <hr>
                                                        </div>
                                                        <div
                                                            class="container-fluid mt-5 d-flex justify-content-center w-100">
                                                            <div class="table-responsive w-100">
                                                                <table class="table">
                                                                    <thead>
                                                                        <tr class="bg-dark text-white">
                                                                            <th>#</th>
                                                                            <th>Nombre</th>
                                                                            <th>Apellido</th>
                                                                            <th>Teléfono</th>
                                                                            <th>Correo Electronico</th>
                                                                            <th>Fecha de Inicio</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        @foreach ($studentss as $students)
                                                                            <tr class="text-right">
                                                                                <td class="text-left">{{ $students->id }}</td>
                                                                                <td class="text-left">{{ $students->name }}</td>
                                                                                <td>
                                                                                    {{ $students->surname }}
                                                                                </td>
                                                                                <td>
                                                                                    {{ $students->phone }}
                                                                                </td>
                                                                                <td>
                                                                                    {{ $students->email }}
                                                                                </td>
                                                                                <td>
                                                                                    {{ date('d-m-Y', strtotime($students->created_at)) }}
                                                                                </td>
                                                                            </tr>
                                                                        @endforeach

                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                        <div class="container-fluid mt-5 w-100">
                                                            <p class="text-right mb-2">Sub - Total amount: $12,348</p>
                                                            <p class="text-right">vat (10%) : $138</p>
                                                            <h4 class="text-right mb-5">Total : $13,986</h4>
                                                            <hr>
                                                        </div>
                                                        <div class="container-fluid w-100">
                                                            <a href="#"
                                                                class="btn btn-primary float-right mt-4 ml-2"><i
                                                                    class="fa fa-print mr-1"></i>Print</a>
                                                            <a href="#" class="btn btn-success float-right mt-4"><i
                                                                    class="fa fa-share mr-1"></i>Send Invoice</a>
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
                'Eliminado!',
                'Tu archivo ha sido eliminado correctamente.',
                'success'
            )
        </script>
    @endif

    <script>
        $('.formulario-eliminar').submit(function(e) {
            e.preventDefault();
            Swal.fire({
                title: 'Estas seguro?',
                text: "No podras revertir esto!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, Eliminar!'
            }).then((result) => {
                if (result.isConfirmed) {
                    this.submit();
                }
            })
        });
    </script>
@endsection
