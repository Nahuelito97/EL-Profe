<!DOCTYPE html>
<html lang="en">

<head>
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <!-- Favicon  -->
    <link rel="icon" href="{{ asset('melody/images/institution.jpg') }}">


    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>El Profe</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('melody') }}/vendors/iconfonts/font-awesome/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('melody') }}/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="{{ asset('melody') }}/vendors/css/vendor.bundle.addons.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('melody') }}/css/style.css">
    <!-- endinject -->

    @yield('css')

</head>


<body>
    <div class="container-scroller sidebar-dark">
        <!-- partial:partials/_navbar.html -->
        <!-- partial:../../partials/_navbar.html -->
        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row default-layout-navbar">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <div class="profile-image">
                    <img src="{{ asset('melody/images/institution.jpg') }}" alt="image"
                        alt="logo"class="brand-image img-circle elevation-3" style="opacity: .8" width="40"
                        height="40" class="brand-image img-circle elevation-3" style="opacity: .8" />
                </div>
                <a href="{{ route('dashboard') }}" class="navbar-brand brand-logo">
                    <span style="margin-top: 8px; margin-left:7px; color:white; font-size:20px">
                        <span class="text-danger">{</span><span class="text-uppercase">
                            El-Profe
                        </span><span class="text-danger">}</span>
                    </span>
                </a>

            </div>
            <div class="navbar-menu-wrapper d-flex align-items-stretch">
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <span class="fas fa-bars"></span>
                </button>

                <ul class="navbar-nav navbar-nav-right">

                    <li class="nav-item nav-profile dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"
                            id="profileDropdown">
                            <img src="{{ Auth::user()->image }}" alt="profile" />

                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown"
                            aria-labelledby="profileDropdown">

                            <div class="dropdown-divider"></div>
                            @guest
                            @else
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                    <i class="fas fa-power-off text-primary"></i>
                                    Logout
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            @endguest
                        </div>
                    </li>
                    <li class="nav-item nav-profile dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"
                            id="profileDropdown">
                            <img src="{{ Auth::user()->image }}" alt="profile" />

                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown"
                            aria-labelledby="profileDropdown">

                            <div class="dropdown-divider"></div>

                                <a class="dropdown-item" href="#"
                                    onclick="">
                                    <i class="fas fa-power-off text-primary"></i>
                                    MercadoPago
                                </a>

                        </div>
                    </li>
                    <li class="nav-item nav-settings d-none d-lg-block">
                        <a class="nav-link" href="#">
                            <i class="fas fa-ellipsis-h"></i>
                        </a>
                    </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                    data-toggle="offcanvas">
                    <span class="fas fa-bars"></span>
                </button>
            </div>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_settings-panel.html -->
            <div class="theme-setting-wrapper">
                <!-- <div id="settings-trigger"><i class="fas fa-fill-drip"></i></div> -->
                <div id="theme-settings" class="settings-panel">
                    <i class="settings-close fa fa-times"></i>
                    <p class="settings-heading">SIDEBAR SKINS</p>
                    <div class="sidebar-bg-options selected" id="sidebar-light-theme">
                        <div class="img-ss rounded-circle bg-light border mr-3"></div>Light
                    </div>
                    <div class="sidebar-bg-options" id="sidebar-dark-theme">
                        <div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark
                    </div>
                    <p class="settings-heading mt-2">HEADER SKINS</p>
                    <div class="color-tiles mx-0 px-4">
                        <div class="tiles primary"></div>
                        <div class="tiles success"></div>
                        <div class="tiles warning"></div>
                        <div class="tiles danger"></div>
                        <div class="tiles info"></div>
                        <div class="tiles dark"></div>
                        <div class="tiles default"></div>
                    </div>
                </div>
            </div>
            <!-- partial:partials/_sidebar.html -->


            @include('sections.aside')


            <!-- partial -->
            <div class="main-panel">
                @yield('content')
                <div class="content-wrapper">

                </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->

                @include('sections.footer')
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

    <!-- plugins:js -->

    <!-- plugins:js -->
    <script src="{{ asset('melody/vendors/js/vendor.bundle.base.js') }}"></script>
    <script src="{{ asset('melody/vendors/js/vendor.bundle.addons.js') }}"></script>
    <!-- endinject -->
    <!-- inject:js -->
    <script src="{{ asset('melody/js/off-canvas.js') }}"></script>
    <script src="{{ asset('melody/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('melody/js/misc.js') }}"></script>
    <script src="{{ asset('melody/js/settings.js') }}"></script>
    <script src="{{ asset('melody/js/todolist.js') }}"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="{{ asset('melody/js/dashboard.js') }}"></script>
    <!-- End custom js for this page-->


    <!-- jQuery -->
    <script src="{{ asset('admilt/plugins/jquery/jquery.min.js') }}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{ asset('admilt/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>

    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap4.min.js"></script>


    <script>
        $(function() {
            $("#roles").DataTable();
            $("#students").DataTable();
            $("#profesors").DataTable();
            $("#especialities").DataTable();
            $("#asistencias").DataTable();
            $("#")
        });
    </script>

    @include('sweetalert::alert')
    @include('sweetalert::alert', ['cdn' => 'https://cdn.jsdelivr.net/npm/sweetalert2@9'])

    @yield('js')

</body>

</html>
