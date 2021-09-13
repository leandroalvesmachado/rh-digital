<div class="vertical-menu">
    <div data-simplebar class="h-100">
        <div id="sidebar-menu">
            <ul class="metismenu list-unstyled" id="side-menu">
                @if (Auth::user()->isFuncionario())
                <li class="text-uppercase">
                    <a href="{{ route('funcionario.home.index') }}">
                        <i class="fas fa-exchange-alt text-white"></i>
                        <span>Ir para o Painel Funcionário</span>
                    </a>
                </li>
                @endif
                <li class="menu-title text-uppercase">Navegação</li>
                <li class="text-uppercase">
                    <a
                        href="{{ route('admin.home.index') }}"
                        class="waves-effect @if (request()->is('admin')) active @endif"
                    >
                        <i class="mdi mdi-view-dashboard text-white"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="text-uppercase">
                    <a
                        href="{{ route('admin.cargos.index') }}"
                        class="waves-effect @if (request()->is('admin/cargos*')) active @endif"
                    >
                        <i class="fas fa-portrait text-white" aria-hidden="true"></i>
                        <span>Cargos</span>
                    </a>
                </li>
                <li class="text-uppercase">
                    <a
                        href="{{ route('admin.estados.index') }}"
                        class="waves-effect @if (request()->is('admin/estados*')) active @endif"
                    >
                        <i class="fa fa-map text-white" aria-hidden="true"></i>
                        <span>Estados</span>
                    </a>
                </li>
                <li class="text-uppercase">
                    <a
                        href="{{ route('admin.funcionarios.index') }}"
                        class="waves-effect @if (request()->is('admin/funcionarios*')) active @endif"
                    >
                        <i class="fas fa-id-card text-white" aria-hidden="true"></i>
                        <span>Funcionários</span>
                    </a>
                </li>
                <li class="text-uppercase">
                    <a href="{{ route('admin.municipios.index') }}" class="waves-effect @if (request()->is('admin/municipios*')) active @endif">
                        <i class="fa fa-map-marker text-white" aria-hidden="true"></i>
                        <span>Municípios</span>
                    </a>
                </li>
                <li class="text-uppercase">
                    <a
                        href="{{ route('admin.orgaos.index') }}"
                        class="waves-effect @if (request()->is('admin/orgaos*')) active @endif"
                    >
                        <i class="fa fa-building text-white" aria-hidden="true"></i>
                        <span>Órgãos</span>
                    </a>
                </li>
                <li class="text-uppercase">
                    <a
                        href="{{ route('admin.usuarios.index') }}"
                        class="waves-effect @if (request()->is('admin/usuarios*')) active @endif"
                    >
                        <i class="fa fa-user text-white" aria-hidden="true"></i>
                        <span>Usuários</span>
                    </a>
                </li>

                <!-- <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-email-outline"></i>
                        <span> Email </span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="email-inbox.html">Inbox</a></li>
                        <li><a href="email-read.html">Email Read</a></li>
                        <li><a href="email-compose.html">Email Compose</a></li>
                    </ul>
                </li>
                <li class="menu-title">Components</li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-format-list-bulleted-type"></i>
                        <span>Tables</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="tables-basic.html">Basic Tables</a></li>
                        <li><a href="tables-datatable.html">Data Table</a></li>
                        <li><a href="tables-responsive.html">Responsive Table</a></li>
                        <li><a href="tables-editable.html">Editable Table</a></li>
                    </ul>
                </li> -->
            </ul>
        </div>
    </div>
</div>
