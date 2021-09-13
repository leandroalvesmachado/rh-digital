@extends('admin.layouts.app')

@section('breadcrumb')

@endsection

@section('content')

<x-admin.filter
    title="Estados"
    subtitle="Filtro"
    :route="route('admin.estados.index')"
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
        <div class="col-md-4">
            <label for="sigla" class="form-label">Sigla</label>
            {!!
                Form::text('sigla', request()->get('sigla'), [
                    'id' => 'sigla',
                    'class' => 'form-control'
                ])
            !!}
        </div>
    </div>
</x-admin.filter>

<x-admin.table
    title="Estados"
    subtitle="Listagem"
    model="Estado"
    :headers="['Nome', 'Sigla', 'País', 'Ações']"
    :records="$estados"
>
    @can('create', App\Models\Estado::class)
    <x-slot name="slotButton">
        <a class="btn btn-success" href="{{ route('admin.estados.create') }}" role="button">
            <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i> Estado
        </a>
    </x-slot>
    @endcan

    @forelse ($estados as $estado)
    <tr>
        <td class="align-middle">
            {{ $estado->nome }}
        </td>
        <td class="align-middle">
            {{ $estado->sigla }}
        </td>
        <td class="align-middle">
            {{ $estado->pais->nome }}
        </td>
        <td class="align-middle">
            <x-admin.action
                :target="$estado->id"
                :object="$estado"
            >
                <a class="dropdown-item" href="{{ route('admin.estados.show', $estado) }}">
                    <i class="fas fa-file-alt"></i> Detalhes
                </a>
                <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#modal-{{ $estado->id }}">
                    <i class="fa fa-eye"></i> Visualizar
                </a>
                @can('update', $estado)
                <a class="dropdown-item" href="{{ route('admin.estados.edit', $estado) }}">
                    <i class="fas fa-user-edit"></i> Editar
                </a>
                @endcan
            </x-admin.action>
        </td>
    </tr>

    <x-admin.modal
        title="Estado: {{ $estado->nome }}"
        :target="$estado->id"
        :object="$estado"
        size="lg"
    >
        <div class="row">
            <div class="col-md-4">
                <p><strong>Nome:</strong></p>
                <p>{{ $estado->nome }}</p>
            </div>
            <div class="col-md-4">
                <p><strong>Sigla:</strong></p>
                <p>{{ $estado->sigla }}</p>
            </div>
            <div class="col-md-4">
                <p><strong>Código IBGE:</strong></p>
                <p>{{ $estado->codigo_ibge }}</p>
            </div>
        </div>
    </x-admin.modal>
    @empty
    @endforelse
</x-admin.table>

@endsection
