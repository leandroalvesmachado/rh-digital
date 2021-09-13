@extends('admin.layouts.app')

@section('breadcrumb')

@endsection

@section('content')

@can('delete', $cargo)

@if ($errors->any())
<div class="alert alert-danger" role="alert">
    @foreach ($errors->all() as $error)
        {{ $error }}
    @endforeach
</div>
@endif

<div class="row justify-content-end mb-3">
    <div class="col-6 col-sm-6 col-md-2 d-grid">
        <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modal-destroy-{{ $cargo->id }}">
            <i class="fas fa-trash"></i> Deletar
        </a>
    </div>
</div>

<x-admin.modal-destroy
    title="Cargo: {{ $cargo->nome }}"
    :target="$cargo->id"
    :object="$cargo"
    size="lg"
    message="Deseja apagar o cargo?"
    :action="route('admin.cargos.destroy', $cargo)"
/>

@endcan

<x-admin.show
    title="Cargo"
    subtitle="Detalhes"
    :routeBack="route('admin.cargos.index')"
>
    <div class="row">
        <div class="col-md-4">
            <p><strong>Nome:</strong></p>
            <p>{{ $cargo->nome }}</p>
        </div>
        <div class="col-md-4">
            <p><strong>Símbolo:</strong></p>
            <p>{{ $cargo->cargoSimbolo->sigla }} ({{ $cargo->cargoSimbolo->nome }})</p>
        </div>
        <div class="col-md-4">
            <p><strong>Carga Horária:</strong></p>
            <p>{{ $cargo->carga_horaria }}</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <p><strong>Descrição:</strong></p>
            <p>{{ $cargo->descricao }}</p>
        </div>
    </div>
</x-admin.show>

@endsection
