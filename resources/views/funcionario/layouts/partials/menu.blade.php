<div class="vertical-menu">
    <div data-simplebar class="h-100">
        <div id="sidebar-menu">
            <ul class="metismenu list-unstyled" id="side-menu">
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
                        href="{{ route('funcionario.comunicacoes-internas.index') }}"
                        class="waves-effect @if (request()->is('funcionario/comunicacao-interna*')) active @endif"
                    >
                        <i class="fas fa-file-alt text-white" aria-hidden="true"></i>
                        <span>CI</span>
                    </a>
                </li>
                <li class="text-uppercase">
                    <a
                        href="{{ route('funcionario.comunicacoes-internas.index') }}"
                        class="waves-effect @if (request()->is('funcionario/comunicacao-interna*')) active @endif"
                    >
                        <i class="fas fa-id-card text-white" aria-hidden="true"></i>
                        <span>Dados Funcionais</span>
                    </a>
                </li>
                <li class="text-uppercase">
                    <a
                        href="{{ route('funcionario.comunicacoes-internas.index') }}"
                        class="waves-effect @if (request()->is('funcionario/comunicacao-interna*')) active @endif"
                    >
                        <i class="fas fa-folder text-white" aria-hidden="true"></i>
                        <span>Pasta Digital</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
