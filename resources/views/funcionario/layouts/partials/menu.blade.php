<div class="vertical-menu">
    <div data-simplebar class="h-100">
        <div id="sidebar-menu">
            <ul class="metismenu list-unstyled" id="side-menu">
                @if (Auth::user()->isAdmin() || Auth::user()->isRh())
                <li class="text-uppercase">
                    <a href="{{ route('admin.home.index') }}">
                        <i class="fas fa-exchange-alt text-white"></i>
                        <span>Ir para o Painel Administrativo</span>
                    </a>
                </li>
                @endif
                <li class="menu-title text-uppercase">Navegação</li>
                <li class="text-uppercase">
                    <a
                        href="{{ route('funcionario.home.index') }}"
                        class="waves-effect @if (request()->is('funcionario')) active @endif"
                    >
                        <i class="mdi mdi-view-dashboard text-white"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="text-uppercase">
                    <a
                        href="{{ route('funcionario.dado-pessoal.home.index') }}"
                        class="waves-effect @if (request()->is('funcionario/dado-pessoal*')) active @endif"
                    >
                        <i class="fas fa-id-card text-white" aria-hidden="true"></i>
                        <span>Dados Pessoais</span>
                    </a>
                </li>
                <li class="text-uppercase">
                    <a
                        href="{{ route('funcionario.pasta-digital.home.index') }}"
                        class="waves-effect @if (request()->is('funcionario/pasta-digital*')) active @endif"
                    >
                        <i class="fas fa-folder text-white" aria-hidden="true"></i>
                        <span>Pasta Digital</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
