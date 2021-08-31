@extends('admin.layouts.app')

@section('breadcrumb')

@endsection

@section('content')

<x-admin.filter
    title="Municípios"
    subtitle="Filtro"
    :route="route('admin.municipios.index')"
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
    title="Municípios"
    subtitle="Listagem"
    model="Município"
    :headers="['Nome', 'Sigla', 'Ações']"
    :records="$municipios"
    :route="route('admin.municipios.create')"
>
    @forelse ($municipios as $municipio)
    <tr>
        <td class="align-middle">
            {{ $municipio->nome }}
        </td>
        <td class="align-middle">
            {{ $municipio->sigla }}
        </td>
        <td class="align-middle">
            <x-admin.action
                :target="$municipio->id"
                :object="$municipio"
            >
                <a class="dropdown-item" href="{{ route('admin.municipios.show', $municipio) }}">
                    <i class="fas fa-file-alt"></i> Detalhes
                </a>
                <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#modal-{{ $municipio->id }}">
                    <i class="fa fa-eye"></i> Visualizar
                </a>
                <a class="dropdown-item" href="{{ route('admin.municipios.edit', $municipio) }}">
                    <i class="fas fa-user-edit"></i> Editar
                </a>
            </x-admin.action>
        </td>
    </tr>

    <x-admin.modal
        title="Município: {{ $municipio->nome }}"
        :target="$municipio->id"
        :object="$municipio"
        size="lg"
    >
        <div class="row">
            <div class="col-md-4">
                <p><strong>Nome:</strong></p>
                <p>{{ $municipio->nome }}</p>
            </div>
            <div class="col-md-4">
                <p><strong>Sigla:</strong></p>
                <p>{{ $municipio->sigla }}</p>
            </div>
            <div class="col-md-4">
                <p><strong>Código IBGE:</strong></p>
                <p>{{ $municipio->codigo_ibge }}</p>
            </div>
        </div>
    </x-admin.modal>
    @empty
    @endforelse
</x-admin.table>

@endsection
