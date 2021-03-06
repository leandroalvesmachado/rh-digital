@extends('admin.layouts.app')

@section('breadcrumb')

@endsection

@section('content')

<x-admin.filter
    title="Órgãos"
    subtitle="Filtro"
    :route="route('admin.orgaos.index')"
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
    title="Órgãos"
    subtitle="Listagem"
    :headers="['Nome', 'Sigla', 'Estado', 'Município', 'Ativo', 'Ações']"
    :records="$orgaos"
    :route="route('admin.orgaos.create')"
>
    @can('create', App\Models\Estado::class)
    <x-slot name="slotButton">
        <a class="btn btn-success" href="{{ route('admin.orgaos.create') }}" role="button">
            <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i> Órgão
        </a>
    </x-slot>
    @endcan

    @forelse ($orgaos as $orgao)
    <tr>
        <td class="align-middle">
            {{ $orgao->nome }}
        </td>
        <td class="align-middle">
            {{ $orgao->sigla }}
        </td>
        <td class="align-middle">
            {{ $orgao->estado->nome }}
        </td>
        <td class="align-middle">
            {{ $orgao->municipio->nome }}
        </td>
        <td class="align-middle">
            {{ $orgao->ativo }}
        </td>
        <td class="align-middle">
            <x-admin.action
                :target="$orgao->id"
                :object="$orgao"
            >
                <a class="dropdown-item" href="{{ route('admin.orgaos.show', $orgao) }}">
                    <i class="fas fa-file-alt"></i> Detalhes
                </a>
                <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#modal-{{ $orgao->id }}">
                    <i class="fa fa-eye"></i> Visualizar
                </a>
                @can('update', $orgao)
                <a class="dropdown-item" href="{{ route('admin.orgaos.edit', $orgao) }}">
                    <i class="fas fa-user-edit"></i> Editar
                </a>
                @endcan
            </x-admin.action>
        </td>
    </tr>
    @empty
    @endforelse
</x-admin.table>

@endsection
