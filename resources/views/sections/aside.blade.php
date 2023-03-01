<!-- partial:../../partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <div class="nav-link">
                <div class="profile-image">
                    <img src="{{ Auth::user()->image }}" alt="image"
                        alt="logo"class="brand-image img-circle elevation-3" style="opacity: .8" width="40"
                        height="40" class="brand-image img-circle elevation-3" style="opacity: .8" />
                </div>
                <div class="profile-name">
                    <p class="name">
                        {{ Auth::user()->name }}
                    </p>
                    <p class="designation">
                        @if (Auth::user()->roles->first())
                            {{ Auth::user()->roles->first()->name }}
                        @endif

                    </p>

                </div>
            </div>
        </li>
        <li class="nav-item">
            <a href="{{ route('dashboard') }}" class="nav-link {{ request()->is('admin/dashboard') ? 'active' : '' }}">
                <i class="fa fa-home menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        @auth
            @role('SuperAdmin|Admin')
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#page-layouts" aria-expanded="false"
                        aria-controls="page-layouts">
                        <i class="fa fa-user-circle menu-icon"></i>
                        <span class="menu-title">Estudiantes</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="page-layouts">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item d-none d-lg-block">
                                <a href="{{ route('studentss.create') }}"
                                    class="nav-link {{ request()->is('admin/studentss*') ? 'active' : '' }}"> + Estudiantes</a>
                            </li>
                            <li class="nav-item"> <a href="{{ route('studentss.index') }}"
                                    class="nav-link {{ request()->is('admin/studentss*') ? 'active' : '' }}">Estudiantes </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item d-none d-lg-block">
                    <a class="nav-link" data-toggle="collapse" href="#sidebar-layouts" aria-expanded="false"
                        aria-controls="sidebar-layouts">
                        <i class="fa fa-user-circle menu-icon"></i>
                        <span class="menu-title">Profesores</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="sidebar-layouts">

                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item d-none d-lg-block"> <a href="{{ route('profesorss.create') }}"
                                    class="nav-link {{ request()->is('admin/profesorss*') ? 'active' : '' }}"> + Profesores</a>
                            </li>
                            <li class="nav-item"> <a href="{{ route('profesorss.index') }}"
                                    class="nav-link {{ request()->is('admin/profesorss*') ? 'active' : '' }}">Profesores</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                        <i class="far fa-compass menu-icon"></i>
                        <span class="menu-title">Parametros</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="ui-basic">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a href="{{ route('todos.index') }}"
                                    class="nav-link {{ request()->is('admin/users*') ? 'active' : '' }}">Países</a></li>
                            <li class="nav-item"> <a href="{{ route('provincias.index') }}"
                                    class="nav-link {{ request()->is('admin/users*') ? 'active' : '' }}">Provincias</a></li>
                            <li class="nav-item"> <a href="{{ route('cities.index') }}"
                                    class="nav-link {{ request()->is('admin/users*') ? 'active' : '' }}">Ciudades</a></li>
                        </ul>
                    </div>
                </li>
                <div class="divider"></div>

                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#ui-advanced" aria-expanded="false"
                        aria-controls="ui-advanced">
                        <i class="fas fa-clipboard-list menu-icon"></i>
                        <span class="menu-title">Especialidades</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="ui-advanced">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a href="{{ route('especialities.create') }}"
                                    class="nav-link {{ request()->is('admin/especialities*') ? 'active' : '' }}"> +
                                    Especialidades</a>
                            </li>
                            <li class="nav-item"> <a href="{{ route('especialities.index') }}"
                                    class="nav-link {{ request()->is('admin/especialities*') ? 'active' : '' }}">Especialidades</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false"
                        aria-controls="form-elements">
                        <i class="fab fa-wpforms menu-icon"></i>
                        <span class="menu-title">Asistencias</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="form-elements">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a href="{{ route('asistencias.index') }}"
                                    class="nav-link {{ request()->is('admin/users*') ? 'active' : '' }}">Asistencias</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#editors" aria-expanded="false"
                        aria-controls="editors">
                        <i class="fas fa-pen-square menu-icon"></i>
                        <span class="menu-title">Materias</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="editors">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link {{ request()->is('admin/users*') ? 'active' : '' }}"
                                    href="{{ route('materias.create') }}">+ Materias</a></li>
                            <li class="nav-item"> <a class="nav-link {{ request()->is('admin/users*') ? 'active' : '' }}"
                                    href="{{ route('materias.index') }}">Materias</a></li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#apps" aria-expanded="false" aria-controls="apps">
                        <i class="fas fa-users menu-icon"></i>
                        <span class="menu-title">Usuarios</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="apps">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a href="{{ route('users.create') }}"
                                    class="nav-link {{ request()->is('admin/users*') ? 'active' : '' }}">+ Usuarios</a>
                            </li>
                            <li class="nav-item"> <a href="{{ route('users.index') }}"
                                    class="nav-link {{ request()->is('admin/users*') ? 'active' : '' }}">Usuarios</a>
                            </li>
                            <li class="nav-item"> <a href="{{ route('users.profile') }}"
                                    class="nav-link {{ request()->is('admin/users*') ? 'active' : '' }}">Perfil</a>

                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#e-commerce" aria-expanded="false"
                        aria-controls="e-commerce">
                        <i class="fas fa-cog menu-icon"></i>
                        <span class="menu-title">Configuración</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="e-commerce">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a href="{{ route('roles.index') }}"
                                    class="nav-link {{ request()->is('admin/users*') ? 'active' : '' }}">Roles</a>
                        </ul>
                    </div>
                </li>
            @endrole
        @endauth
    </ul>
</nav>
<!-- partial -->
