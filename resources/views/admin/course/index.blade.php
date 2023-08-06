@extends('layouts.app')


@section('content')
    @php
        // SDK de Mercado Pago
        require base_path('vendor/autoload.php');
        // Agrega credenciales
        MercadoPago\SDK::setAccessToken(config('services.mercadopago.token'));

        // Crea un objeto de preferencia
        $preference = new MercadoPago\Preference();

        // Crea un ítem en la preferencia
        $item = new MercadoPago\Item();
        $item->title = 'Mi producto';
        $item->quantity = 1;
        $item->unit_price = 75.56;
        $preference->items = [$item];
        $preference->save();
    @endphp



    <div class="content-wrapper">
        <div class="content-header pt-3 pb-3 px-0 bg-white">
            <div class="container-fluid">

                <div class="callout callout-info">
                    <div class="col-xs-12 col-sm-4 col-md-3">
                        <img src="{{ asset('front-end/assets/img/category.png') }}" alt="user"
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

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="container text-center pt-5">
                                        <h4 class="mb-3 mt-5">Start up your Bussiness today</h4>
                                        <p class="w-75 mx-auto mb-5">Choose a plan that suits you the best. If you are not
                                            fully satisfied, we offer 30-day money-back guarantee no questions asked!!</p>
                                        <div class="row pricing-table">
                                            <div class="col-md-4 grid-margin stretch-card pricing-card">
                                                <div class="card border-primary border pricing-card-body">
                                                    <div class="text-center pricing-card-head">
                                                        <h3>Free</h3>
                                                        <p>Basic Plan</p>
                                                        <h1 class="font-weight-normal mb-4">$00.00</h1>
                                                    </div>
                                                    <ul class="list-unstyled plan-features">
                                                        <li>Email preview on air</li>
                                                        <li>Spam testing and blocking</li>
                                                        <li>10 GB Space</li>
                                                        <li>50 user accounts</li>
                                                        <li>Free support for one years</li>
                                                        <li>Free upgrade for one year</li>
                                                    </ul>
                                                    <div class="wrapper">
                                                        <a href="#"
                                                            class="btn btn-outline-primary btn-block">Download</a>
                                                    </div>
                                                    <p class="mt-3 mb-0 plan-cost text-gray">Free</p>
                                                </div>
                                            </div>
                                            <div class="col-md-4 grid-margin stretch-card pricing-card">
                                                <div class="card border border-success pricing-card-body">
                                                    <div class="text-center pricing-card-head">
                                                        <h3 class="text-success">Professional</h3>
                                                        <p>For Business</p>
                                                        <h1 class="font-weight-normal mb-4">$50.90</h1>
                                                    </div>
                                                    <ul class="list-unstyled plan-features">
                                                        <li>Email preview on air</li>
                                                        <li>Spam testing and blocking</li>
                                                        <li>50 GB Space</li>
                                                        <li>100 user accounts</li>
                                                        <li>Free support for two years</li>
                                                        <li>Free upgrade for two year</li>
                                                    </ul>
                                                    <div class="wrapper">
                                                        <a href="#" class="btn btn-success btn-block">Start trial</a>
                                                    </div>
                                                    <p class="mt-3 mb-0 plan-cost text-success">or purchase now</p>
                                                </div>
                                            </div>
                                            <div class="col-md-4 grid-margin stretch-card pricing-card">
                                                <div class="card border border-primary pricing-card-body">
                                                    <div class="text-center pricing-card-head">
                                                        <h3>Enterprise</h3>
                                                        <p>Custom Business</p>
                                                        <h1 class="font-weight-normal mb-4">$80.90</h1>
                                                    </div>
                                                    <ul class="list-unstyled plan-features">
                                                        <li>Email preview on air</li>
                                                        <li>Spam testing and blocking</li>
                                                        <li>100 GB Space</li>
                                                        <li>200 user accounts</li>
                                                        <li>Free support for two years</li>
                                                        <li>Free upgrade for two year</li>
                                                    </ul>
                                                    <div class="wrapper">
                                                        <button><div id="wallet_container"></div></button>
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
            <div id="wallet_container"></div>
        </section>
        <!-- /.content -->
    </div>
@endsection

@section('js')
    <script src="https://sdk.mercadopago.com/js/v2"></script>

    <script>
        const mp = new MercadoPago("{{ config('services.mercadopago.key') }}");
        const bricksBuilder = mp.bricks();


        mp.bricks().create("wallet", "wallet_container", {
            initialization: {
                preferenceId: "{{ $preference->id }}",
                redirectMode: "modal"
            },
        });
    </script>



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
