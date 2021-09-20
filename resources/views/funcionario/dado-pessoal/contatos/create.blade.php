@extends('funcionario.layouts.app')

@section('breadcrumb')

@endsection

@section('content')

<x-funcionario.form-create
    title="Contatos"
    subtitle="novo"
    :action="route('funcionario.dado-pessoal.contatos.store', $funcionario)"
    :routeBack="route('funcionario.dado-pessoal.home.index')"
>
    @include('funcionario.dado-pessoal.contatos.partials.form')
</x-funcionario.form-create>

<x-funcionario.table
    title="Contatos"
    subtitle="Listagem"
    :headers="['Nome', 'E-mail', 'E-mail Alt.', 'Parentesco','Telefone Res.', 'Celular', 'Ações']"
    :records="$funcionario->contatos"
>
    @forelse ($funcionario->contatos as $funcionarioContato)
    <tr>
        <td class="align-middle">
            {{ $funcionarioContato->nome }}
        </td>
        <td class="align-middle">
            {{ $funcionarioContato->email_principal }}
        </td>
        <td class="align-middle">
            {{ $funcionarioContato->email_alternativo }}
        </td>
        <td class="align-middle">
            {{ $funcionarioContato->grau_parentesco }}
        </td>
        <td class="align-middle">
            {{ $funcionarioContato->telefone_residencial }}
        </td>
        <td class="align-middle">
            {{ $funcionarioContato->telefone_celular }}
        </td>
        <td class="align-middle">
            <x-funcionario.action
                :target="$funcionarioContato->id"
                :object="$funcionarioContato"
            >
                <a
                    class="dropdown-item"
                    data-bs-toggle="modal"
                    data-bs-target="#modal-destroy-{{ $funcionarioContato->id }}"
                >
                    <i class="fas fa-trash"></i> Deletar
                </a>
            </x-funcionario.action>
        </td>
    </tr>

    <x-admin.modal-destroy
        title="Contato: {{ $funcionarioContato->nome }}"
        :target="$funcionarioContato->id"
        :object="$funcionarioContato"
        size="lg"
        message="Deseja apagar o contato?"
        :action="route('funcionario.dado-pessoal.contatos.destroy', [$funcionario, $funcionarioContato])"
    />
    @empty
    @endforelse
</x-funcionario.table>

@endsection
