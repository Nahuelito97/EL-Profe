<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: black">
    <!-- Brand Logo -->
    <a href="{{ route('dashboard') }}" class="brand-link">
        <img src="{{ asset('melody/images/institution.jpg') }}" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8" width="50" height="40"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span style="margin-top: 8px; margin-left:7px; color:white; font-size:20px">
            <span class="text-danger">{</span><span class="text-uppercase"> {{ config('app.name', 'El-Profe') }}
            </span><span class="text-danger">}</span>
        </span>

    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('melody/images/institution.jpg') }}" alt="AdminLTE Logo"
                    class="brand-image img-circle elevation-3" style="opacity: .8" width="50" height="40">

            </div>
            <div class="info">
                <a href="#" class="d-block">{{ Auth::user()->name }}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">

                <li class="nav-item">
                    @can('admin.dashboard')
                        <a href="{{ route('dashboard') }}"
                            class="nav-link {{ request()->is('admin/dashboard') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Dashboard
                            </p>
                        </a>
                    @endcan
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Estudiantes
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('studentss.create') }}"
                                class="nav-link {{ request()->is('admin/studentss*') ? 'active' : '' }}">
                                <i class="fas fa-user-plus"></i>
                                <p>
                                   + Estudiantes
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('studentss.index') }}"
                                class="nav-link {{ request()->is('admin/studentss*') ? 'active' : '' }}">
                                <i class="fas fa-user"></i>
                                <p>
                                    Estudiantes
                                </p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Profesores
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('profesorss.index') }}"
                                class="nav-link {{ request()->is('admin/profesorss*') ? 'active' : '' }}">
                                <i class="fas fa-user"></i>
                                <p>
                                    Profesores
                                </p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>                        <p>
                            Parametros
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('especialities.index') }}"
                                class="nav-link {{ request()->is('admin/especialities*') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-tags"></i>
                                <p>
                                    Especialidad
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('asistencias.index') }}"
                                class="nav-link {{ request()->is('admin/users*') ? 'active' : '' }}">
                                <i class="fas fa-user-cog"></i>
                                <p>
                                    Asistencias
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('todos.index') }}"
                                class="nav-link {{ request()->is('admin/users*') ? 'active' : '' }}">
                                <i class="fas fa-flag"></i>
                                <p>
                                    Pais
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('provincias.index') }}"
                                class="nav-link {{ request()->is('admin/users*') ? 'active' : '' }}">
                                <i class="fas fa-flag"></i>
                                <p>
                                    Provincias
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('cities.index') }}"
                                class="nav-link {{ request()->is('admin/users*') ? 'active' : '' }}">
                                <i class="fas fa-flag"></i>
                                <p>
                                    Provincias
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/forms/validation.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Validation</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-cogs"></i>
                        <p>
                            Config
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('users.index') }}"
                                class="nav-link {{ request()->is('admin/users*') ? 'active' : '' }}">
                                <i class="fas fa-user-cog"></i>
                                <p>
                                    UserConf
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('roles.index') }}"
                                class="nav-link {{ request()->is('admin/roles*') ? 'active' : '' }}">
                                <i class="fas fa-wrench"></i>
                                <p>
                                    Roles
                                </p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="fas fa-power-off text-primary"></i></i>
                        Logout
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right" style="background-color:black">
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

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
