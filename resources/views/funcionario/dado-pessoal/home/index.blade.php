@extends('funcionario.layouts.app')

@section('breadcrumb')

@endsection

@section('content')
<div class="row">
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
</div>

@if (!Auth::user()->funcionario)
<a href="{{ route('funcionario.dado-pessoal.identificacoes.create') }}">Identificação</a>
@else
<a href="{{ route('funcionario.dado-pessoal.identificacoes.edit', Auth::user()->funcionario) }}">Identificação Atualizar</a>
@endif
<br>
<a href="{{ route('funcionario.dado-pessoal.contatos.create') }}">Contatos</a>
<br>
<a href="#">Endereço Residencial</a>
<br>
<a href="#">Dependentes</a>

@endsection
