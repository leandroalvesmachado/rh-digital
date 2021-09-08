@extends('admin.layouts.app')

@section('breadcrumb')

@endsection

@section('content')

<x-admin.filter
    title="Cargos"
    subtitle="Filtro"
    :route="route('admin.cargos.index')"
>
    <div class="row">
        <div class="col-md-4">
            <label for="nome" class="form-label">Nome</label>
            {!!
                Form::text('nome', request()->get('nome'), [
                    'id' => 'nome',
                    'class' => 'form-control'
                ])
            !!}
        </div>
    </div>
</x-admin.filter>

<x-admin.table
    title="Cargos"
    subtitle="Listagem"
    :headers="['Nome', 'Símbolo', 'Descrição', 'Carga Horária','Ações']"
    :records="$cargos"
>
    @can('create', App\Models\Cargo::class)
    <x-slot name="slotButton">
        <a class="btn btn-success" href="{{ route('admin.cargos.create') }}" role="button">
            <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i> Cargo
        </a>
    </x-slot>
    @endcan

    @forelse ($cargos as $cargo)
    <tr>
        <td class="align-middle">
            {{ $cargo->nome }}
        </td>
        <td class="align-middle">
            {{ $cargo->cargoSimbolo->sigla }}
        </td>
        <td class="align-middle">
            {{ $cargo->descricao }}
        </td>
        <td class="align-middle">
            {{ $cargo->carga_horaria }}
        </td>
        <td class="align-middle">
            <x-admin.action
                :target="$cargo->id"
                :object="$cargo"
            >
                <a class="dropdown-item" href="{{ route('admin.cargos.show', $cargo) }}">
                    <i class="fas fa-file-alt"></i> Detalhes
                </a>
                <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#modal-{{ $cargo->id }}">
                    <i class="fa fa-eye"></i> Visualizar
                </a>
                @can('update', $cargo)
                <a class="dropdown-item" href="{{ route('admin.cargos.edit', $cargo) }}">
                    <i class="fas fa-user-edit"></i> Editar
                </a>
                @endcan
            </x-admin.action>
        </td>
    </tr>

    <x-admin.modal
        title="Cargo: {{ $cargo->nome }}"
        :target="$cargo->id"
        :object="$cargo"
        size="lg"
    >
        <div class="row">
            <div class="col-md-6">
                <p><strong>Nome:</strong></p>
                <p>{{ $cargo->nome }}</p>
            </div>
            <div class="col-md-6">
                <p><strong>Símbolo:</strong></p>
                <p>{{ $cargo->cargoSimbolo->sigla }} ({{ $cargo->cargoSimbolo->nome }})</p>
            </div>
        </div>
        <div class="row">
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
    </x-admin.modal>
    @empty
    @endforelse
</x-admin.table>

@endsection
