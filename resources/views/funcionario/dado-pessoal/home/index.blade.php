@extends('funcionario.layouts.app')

@section('breadcrumb')

@endsection

@section('content')
<!-- <div class="row">
    <div class="col-md-6 col-lg-6 col-xl-3">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Identificação</h4>
                <p class="card-text">Some quick example text to build on the card title and make
                    up the bulk of the card's content.</p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Data da última Alteração</li>
                <li class="list-group-item">{{ Auth::user()->funcionario ? Auth::user()->funcionario->updated_at : 'Nenhum cadastro realizado' }}</li>
            </ul>
            <div class="card-body">
                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-6 col-xl-3">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Identificação</h4>
                <p class="card-text">Some quick example text to build on the card title and make
                    up the bulk of the card's content.</p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Cras justo odio</li>
                <li class="list-group-item">Dapibus ac facilisis in</li>
            </ul>
            <div class="card-body">
                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-6 col-xl-3">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Identificação</h4>
                <p class="card-text">Some quick example text to build on the card title and make
                    up the bulk of the card's content.</p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Data da última Alteração</li>
                <li class="list-group-item">Horário</li>
            </ul>
            <div class="card-body">
                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-6 col-xl-3">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Identificação</h4>
                <p class="card-text">Some quick example text to build on the card title and make
                    up the bulk of the card's content.</p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Cras justo odio</li>
                <li class="list-group-item">Dapibus ac facilisis in</li>
            </ul>
            <div class="card-body">
                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a>
            </div>
        </div>
    </div>
</div> -->

@if (!Auth::user()->funcionario)
<a href="{{ route('funcionario.dado-pessoal.identificacoes.create') }}">Identificação</a>
@else

<div class="row">
    <div class="col-md-6 col-lg-6 col-xl-6">
        <div class="card">
            <div class="card-header">
                <i class="fas fa-id-badge"></i> Identificação
            </div>
            <div class="card-body">2</div>
            <div class="card-footer text-muted">3</div>
        </div>
    </div>
    <div class="col-md-6 col-lg-6 col-xl-6">
        <div class="card">
            <div class="card-header">
                <i class="fas fa-address-book"></i> Contatos
            </div>
            <div class="card-body">2</div>
            <div class="card-footer text-muted">3</div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6 col-lg-6 col-xl-6">
        <div class="card">
            <div class="card-header">
                <i class="fas fa-users"></i> Dependentes
            </div>
            <div class="card-body">2</div>
            <div class="card-footer text-muted">3</div>
        </div>
    </div>
    <div class="col-md-6 col-lg-6 col-xl-6">
        <div class="card">
            <div class="card-header">
                <i class="fas fa-map-marked-alt"></i> Endereços
            </div>
            <div class="card-body">2</div>
            <div class="card-footer text-muted">3</div>
        </div>
    </div>
</div>

<!-- <div class="row">
        <div class="col-lg-12 text-center">
            <h2 class="section-title">Dados Pessoais</h2>
        </div>
        <div class="col-lg-3 col-sm-6 mb-4">
            <div class="card border-0 shadow rounded-xs pt-5">
                <div class="card-body"> <i class="fa fa-object-ungroup icon-lg icon-primary icon-bg-primary icon-bg-circle mb-3"></i>
                    <h4 class="mt-4 mb-3">Networking</h4>
                    <p>For what reason would it be advisable for me to think about business content?</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 mb-4">
            <div class="card border-0 shadow rounded-xs pt-5">
                <div class="card-body"> <i class="fa fa-users icon-lg icon-yellow icon-bg-yellow icon-bg-circle mb-3"></i>
                    <h4 class="mt-4 mb-3">Social Activity</h4>
                    <p>For what reason would it be advisable for me to think about business content?</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 mb-4">
            <div class="card border-0 shadow rounded-xs pt-5">
                <div class="card-body"> <i class="fa fa-desktop icon-lg icon-purple icon-bg-purple icon-bg-circle mb-3"></i>
                    <h4 class="mt-4 mb-3">Web Design</h4>
                    <p>For what reason would it be advisable for me to think about business content?</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 mb-4">
            <div class="card border-0 shadow rounded-xs pt-5">
                <div class="card-body"> <i class="fa fa-cloud icon-lg icon-cyan icon-bg-cyan icon-bg-circle mb-3"></i>
                    <h4 class="mt-4 mb-3">Cloud Service</h4>
                    <p>For what reason would it be advisable for me to think about business content?</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 mb-4">
            <div class="card border-0 shadow rounded-xs pt-5">
                <div class="card-body"> <i class="fa fa-comments icon-lg icon-red icon-bg-red icon-bg-circle mb-3"></i>
                    <h4 class="mt-4 mb-3">Consulting</h4>
                    <p>For what reason would it be advisable for me to think about business content?</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 mb-4">
            <div class="card border-0 shadow rounded-xs pt-5">
                <div class="card-body"> <i class="fa fa-search-plus icon-lg icon-green icon-bg-green icon-bg-circle mb-3"></i>
                    <h4 class="mt-4 mb-3">SEO Optimization</h4>
                    <p>For what reason would it be advisable for me to think about business content?</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 mb-4">
            <div class="card border-0 shadow rounded-xs pt-5">
                <div class="card-body"> <i class="fa fa-user icon-lg icon-orange icon-bg-orange icon-bg-circle mb-3"></i>
                    <h4 class="mt-4 mb-3">Usability Testing</h4>
                    <p>For what reason would it be advisable for me to think about business content?</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 mb-4">
            <div class="card border-0 shadow rounded-xs pt-5">
                <div class="card-body"> <i class="fa fa-envelope icon-lg icon-blue icon-bg-blue icon-bg-circle mb-3"></i>
                    <h4 class="mt-4 mb-3">UX Prototyping</h4>
                    <p>For what reason would it be advisable for me to think about business content?</p>
                </div>
            </div>
        </div>
    </div>

<a href="{{ route('funcionario.dado-pessoal.identificacoes.edit', Auth::user()->funcionario) }}">Identificação Atualizar</a>

<br>
<a href="{{ route('funcionario.dado-pessoal.contatos.create', Auth::user()->funcionario) }}">Contatos</a>

<br>
<a href="{{ route('funcionario.dado-pessoal.dependentes.create', Auth::user()->funcionario) }}">Dependentes</a>

<br>
<a href="{{ route('funcionario.dado-pessoal.enderecos.create', Auth::user()->funcionario) }}">Endereços</a> -->
@endif

@endsection
