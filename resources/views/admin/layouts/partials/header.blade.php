<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="{{ route('admin.home.index') }}" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="{{ asset('images/logo-pmf.png') }}" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ asset('images/logo-pmf.png') }}" alt="" height="17">
                    </span>
                </a>
                <a href="{{ route('admin.home.index') }}" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="{{ asset('images/logo-pmf.png') }}" alt="" height="42">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ asset('images/logo-pmf.png') }}" alt="" height="56">
                    </span>
                </a>
            </div>
            <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
                <i class="mdi mdi-menu"></i>
            </button>
            <div class="d-none d-sm-block ms-2">
                <h4 class="page-title">RH DIGITAL</h4>
            </div>
        </div>
        <div class="search-wrap" id="search-wrap">
        </div>
        <div class="d-flex">
            <div class="dropdown d-none d-lg-inline-block me-2">
                <button type="button" class="btn header-item noti-icon waves-effect" data-bs-toggle="fullscreen">
                    <i class="mdi mdi-fullscreen"></i>
                </button>
            </div>
            <div class="dropdown d-inline-block">
                <button
                    type="button"
                    class="btn header-item waves-effect"
                    id="page-header-user-dropdown"
                    data-bs-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                >
                    <img class="rounded-circle header-profile-user" src="{{ asset('images/users/avatar-1.jpg') }}" alt="Header Avatar">
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                    <a class="dropdown-item" href="#">
                        <strong>Nome:</strong>
                        <br>
                        {{ Auth::user()->name }}
                    </a>
                    <a class="dropdown-item" href="#">
                        <strong>Perfil:</strong>
                        <br>
                        @forelse (Auth::user()->perfis as $perfil)
                             - {{ $perfil->nome }}
                            <br>
                        @empty
                        @endforelse
                    </a>
                    <div class="dropdown-divider"></div>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a
                            class="dropdown-item text-danger"
                            href="route('logout')"
                            onclick="event.preventDefault(); this.closest('form').submit();"
                        >
                            <i class="fas fa-power-off"></i> Sair
                        </a>
                    </form>
                </div>
            </div>
            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
                    <i class="mdi mdi-spin mdi-cog"></i>
                </button>
            </div>
        </div>
    </div>
</header>
