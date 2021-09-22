@extends('funcionario.layouts.app')

@section('breadcrumb')

@endsection

@section('content')

<x-funcionario.form-create
    title="Dependentes"
    subtitle="Novo"
    :action="route('funcionario.dado-pessoal.dependentes.store', $funcionario)"
    :routeBack="route('funcionario.dado-pessoal.home.index')"
>
    @include('funcionario.dado-pessoal.dependentes.partials.form')
</x-funcionario.form-create>

<x-funcionario.table
    title="Dependentes"
    subtitle="Listagem"
    :headers="['CPF', 'Data Nascimento', 'Nome', 'Noma da Mãe', 'Ações']"
    :records="$funcionario->dependentes"
>
    @forelse ($funcionario->dependentes as $funcionarioDependente)
    <tr>
        <td class="align-middle">
            {{ $funcionarioDependente->cpf }}
        </td>
        <td class="align-middle">
            {{ $funcionarioDependente->data_nascimento }}
        </td>
        <td class="align-middle">
            {{ $funcionarioDependente->nome }}
        </td>
        <td class="align-middle">
            {{ $funcionarioDependente->nome_mae }}
        </td>
        <td class="align-middle">
            <x-funcionario.action
                :target="$funcionarioDependente->id"
                :object="$funcionarioDependente"
            >
                <a
                    class="dropdown-item"
                    data-bs-toggle="modal"
                    data-bs-target="#modal-destroy-{{ $funcionarioDependente->id }}"
                >
                    <i class="fas fa-trash"></i> Deletar
                </a>
            </x-funcionario.action>
        </td>
    </tr>

    <x-admin.modal-destroy
        title="Dependente: {{ $funcionarioDependente->nome }}"
        :target="$funcionarioDependente->id"
        :object="$funcionarioDependente"
        size="lg"
        message="Deseja apagar o dependente?"
        :action="route('funcionario.dado-pessoal.dependentes.destroy', [$funcionario, $funcionarioDependente])"
    />
    @empty
    @endforelse
</x-funcionario.table>

@endsection
