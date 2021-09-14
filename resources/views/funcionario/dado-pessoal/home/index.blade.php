@extends('funcionario.layouts.app')

@section('breadcrumb')

@endsection

@section('content')

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
