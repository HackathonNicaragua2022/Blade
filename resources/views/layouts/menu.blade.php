{{-- <li class="side-menus {{ Request::is('home') ? 'active' : '' }}">
    <a class="nav-link bg-light" href="/">
        <i class=" fas fa-building"></i><span>Inicio</span>
    </a>
    <a class="nav-link" href="/usuarios">
        <i class=" fas fa-building"></i><span>Usuarios</span>
    </a>
    <a class="nav-link" href="/roles">
        <i class=" fas fa-building"></i><span>Roles</span>
    </a>
    <a class="nav-link" href="/categorias">
        <i class=" fas fa-building"></i><span>Categorías</span>
    </a>
</li> --}}

<ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
    <li class="nav-item">
        <a href="/" class="nav-link a align-middle px-0">
            <i class="bi bi-house"></i> <span class="ms-1 d-none d-sm-inline">Inicio</span>
        </a>
        <a href="/usuarios" class="nav-link a align-middle px-0">
            <i class="bi bi-person-fill"></i> <span class="ms-1 d-none d-sm-inline">Usuarios</span>
        </a>
        <a href="/categorias" class="nav-link a align-middle px-0">
            <i class="bi bi-tag-fill"></i> <span class="ms-1 d-none d-sm-inline">Categorias</span>
        </a>
        <a href="/negocios" class="nav-link a align-middle px-0">
            <i class="bi bi-briefcase-fill"></i> <span class="ms-1 d-none d-sm-inline">Negocios</span>
        </a>

        @if (\Illuminate\Support\Facades\Auth::user())
            <a href="/" class="nav-link a align-middle px-0" data-id="{{ \Auth::id() }}">
                <i class="bi bi-pen-fill"></i> <span class="ms-1 d-none d-sm-inline">Editar Perfil</span>
            </a>

            {{-- <a href="/" class="nav-link align-middle px-0" data-toggle="modal" data-target="#changePasswordModal" data-id="{{ \Auth::id() }}">
                <i class="bi bi-house"></i> <span class="ms-1 d-none d-sm-inline">Cambiar Contraseña</span>
            </a> --}}

            <a href="{{ url('logout') }}" class="nav-link a align-middle px-0" onclick="event.preventDefault();
            localStorage.clear(); document.getElementById('logout-form').submit();">
                <i class="bi bi-x-circle-fill"></i> <span class="ms-1 d-none d-sm-inline">Cerrar Sesión</span>
            </a>
            <form id="logout-form" action="{{ url('/logout') }}" method="POST" class="d-none">
                {{ csrf_field() }}
            </form>
        @endif
    </li>
</ul>
