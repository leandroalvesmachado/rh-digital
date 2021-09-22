@extends('funcionario.layouts.app')

@section('breadcrumb')

@endsection

@section('content')

<x-funcionario.form-create
    title="Endereços"
    subtitle="Novo"
    :action="route('funcionario.dado-pessoal.enderecos.store', $funcionario)"
    :routeBack="route('funcionario.dado-pessoal.home.index')"
>
    @include('funcionario.dado-pessoal.enderecos.partials.form')
</x-funcionario.form-create>

<x-funcionario.table
    title="Endereços"
    subtitle="Listagem"
    :headers="['Nome', 'CEP', 'País', 'Estado', 'Município', 'Número', 'Bairro', 'Logradouro', 'Ações']"
    :records="$funcionario->enderecos"
>
    @forelse ($funcionario->enderecos as $funcionarioEndereco)
    <tr>
        <td class="align-middle">
            {{ $funcionarioEndereco->nome }}
        </td>
        <td class="align-middle">
            {{ $funcionarioEndereco->cep }}
        </td>
        <td class="align-middle">
            {{ $funcionarioEndereco->pais->nome }}
        </td>
        <td class="align-middle">
            {{ $funcionarioEndereco->estado->nome }}
        </td>
        <td class="align-middle">
            {{ $funcionarioEndereco->municipio->nome }}
        </td>
        <td class="align-middle">
            {{ $funcionarioEndereco->numero }}
        </td>
        <td class="align-middle">
            {{ $funcionarioEndereco->bairro }}
        </td>
        <td class="align-middle">
            {{ $funcionarioEndereco->logradouro }}
        </td>
        <td class="align-middle">
            <x-funcionario.action
                :target="$funcionarioEndereco->id"
                :object="$funcionarioEndereco"
            >
                <a
                    class="dropdown-item"
                    data-bs-toggle="modal"
                    data-bs-target="#modal-destroy-{{ $funcionarioEndereco->id }}"
                >
                    <i class="fas fa-trash"></i> Deletar
                </a>
            </x-funcionario.action>
        </td>
    </tr>

    <x-admin.modal-destroy
        title="Contato: {{ $funcionarioEndereco->nome }}"
        :target="$funcionarioEndereco->id"
        :object="$funcionarioEndereco"
        size="lg"
        message="Deseja apagar o endereço?"
        :action="route('funcionario.dado-pessoal.enderecos.destroy', [$funcionario, $funcionarioEndereco])"
    />
    @empty
    @endforelse
</x-funcionario.table>

@endsection
