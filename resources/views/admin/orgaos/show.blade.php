@extends('admin.layouts.app')

@section('breadcrumb')

<x-admin.breadcrumb
    :items="['Estados', 'Novo Estado']"
/>

@endsection

@section('content')

<x-admin.show
    title="Órgão"
    subtitle="Detalhes"
    :routeBack="route('admin.orgaos.index')"
>
    <div class="row">
        <div class="col-md-8">
            <p>Nome:</p>
            <p>{{ $orgao->nome }}</p>
        </div>
        <div class="col-md-4">
            <p>Sigla:</p>
            <p>{{ $orgao->sigla }}</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <p>Estado:</p>
            <p>{{ $orgao->estado->nome }}</p>
        </div>
        <div class="col-md-4">
            <p>Município:</p>
            <p>{{ $orgao->municipio->nome }}</p>
        </div>
        <div class="col-md-4">
            <p>Site:</p>
            <p>{{ $orgao->site }}</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <p>CEP:</p>
            <p>{{ $orgao->cep }}</p>
        </div>
        <div class="col-md-6">
            <p>Endereço:</p>
            <p>{{ $orgao->endereco }}</p>
        </div>
        <div class="col-md-2">
            <p>Endereço:</p>
            <p>{{ $orgao->numero }}</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <p>Telefone:</p>
            <p>{{ $orgao->telefone }}</p>
        </div>
    </div>
</x-admin.show>

<x-admin.table
    title="Órgão"
    subtitle="Setores"
    :records="$orgao->setores"
    :headers="['Nome', 'Descrição', 'Sigla', 'Status', 'Ações']"
>
    @forelse ($orgao->setores as $setor)
    <tr>
        <td class="align-middle">
            {{ $setor->nome }}
        </td>
        <td class="align-middle">
            {{ $setor->descricao }}
        </td>
        <td class="align-middle">
            {{ $setor->sigla }}
        </td>
        <td class="align-middle">
            <x-admin.badge
                :message="$setor->ativo ? 'Sim' : 'Não'"
                :type="$setor->ativo ? 'success' : 'secondary'"
            />
        </td>
        <td class="align-middle">
            <x-admin.action
                :target="$orgao->id"
                :object="$orgao"
            >
                <a class="dropdown-item" href="{{ route('admin.orgaos.setores.show', [$orgao, $setor]) }}">
                    <i class="fas fa-file-alt"></i> Detalhes
                </a>
            </x-admin.action>
        </td>
    </tr>
    @empty
    @endforelse
</x-admin.table>

@endsection
