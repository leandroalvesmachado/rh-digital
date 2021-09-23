@extends('funcionario.layouts.app')

@section('breadcrumb')

@endsection

@section('content')

<div class="row">
    <div class="col-md-6 col-lg-6 col-xl-6 text-uppercase">
        <div class="card">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-md-4 col-lg-4 col-xl-4">
                        <i class="fas fa-id-badge fa-5x"></i>
                    </div>
                    <div class="col-md-8 col-lg-8 col-xl-8">
                        <a
                            href="{{ !$usuarioFuncionario ?
                                route('funcionario.dado-pessoal.identificacoes.create') :
                                route('funcionario.dado-pessoal.identificacoes.edit', $usuarioFuncionario)
                            }}"
                            class="stretched-link"
                        >
                            <span class="fs-6">Identificação</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-6 col-xl-6 text-uppercase">
        <div class="card">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-md-4 col-lg-4 col-xl-4">
                        <i class="fas fa-address-book fa-5x"></i>
                    </div>
                    <div class="col-md-8 col-lg-8 col-xl-8">
                        @if ($usuarioFuncionario)
                        <a
                            href="{{ route('funcionario.dado-pessoal.contatos.create', $usuarioFuncionario) }}"
                            class="stretched-link"
                        >
                            <span class="fs-6">Contatos</span>
                        </a>
                        @else
                        <del>
                            <span class="fs-6">Contatos</span>
                        </del>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6 col-lg-6 col-xl-6 text-uppercase">
        <div class="card">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-md-4 col-lg-4 col-xl-4">
                        <i class="fas fa-users fa-5x"></i>
                    </div>
                    <div class="col-md-8 col-lg-8 col-xl-8">
                        @if ($usuarioFuncionario)
                        <a
                            href="{{ route('funcionario.dado-pessoal.dependentes.create', $usuarioFuncionario) }}"
                            class="stretched-link"
                        >
                            <span class="fs-6">Dependentes</span>
                        </a>
                        @else
                        <del>
                            <span class="fs-6">Dependentes</span>
                        </del>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-6 col-xl-6 text-uppercase">
        <div class="card">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-md-4 col-lg-4 col-xl-4">
                        <i class="fas fa-map-marked-alt fa-5x"></i>
                    </div>
                    <div class="col-md-8 col-lg-8 col-xl-8">
                        @if ($usuarioFuncionario)
                        <a
                            href="{{ route('funcionario.dado-pessoal.enderecos.create', $usuarioFuncionario) }}"
                            class="stretched-link"
                        >
                            <span class="fs-6">Endereços</span>
                        </a>
                        @else
                        <del>
                            <span class="fs-6">Endereços</span>
                        </del>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
