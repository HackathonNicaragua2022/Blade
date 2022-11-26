{{-- <aside class="sidebar is-show" id="sidebar">
    <div class="sidebar-brand">
        <img class="navbar-brand-full app-header-logo" src="{{ asset('img/logo.png') }}" width="65"
             alt="Infyom Logo">
        <a href="{{ url('/') }}"></a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
        <a href="{{ url('/') }}" class="small-sidebar-text">
            <img class="navbar-brand-full" src="{{ asset('img/logo.png') }}" width="45px" alt=""/>
        </a>
    </div>
    <ul class="sidebar-menu">
        @include('layouts.menu')
    </ul>
</aside> --}}

{{-- <!-- BARRA LATERAL -->
<aside class="sidebar is-show" id="sidebar">
    <div class="sidebar-box">
        <ul class="uk-nav">
            @include('layouts.menu')
        </ul>
    </div>
</aside>
<!-- FIN BARRA LATERAL -->  --}}

<aside class="container-fluid h-100">
    <div class="row flex-nowrap">
        <div class="uk-nav col-auto col-md-3 col-xl-2 px-sm-2 px-0 barra-lateral">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                @include('layouts.menu')
            </div>
        </div>
    </div>
</aside>
