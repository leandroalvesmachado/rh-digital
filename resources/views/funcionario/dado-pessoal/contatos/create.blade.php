@extends('funcionario.layouts.app')

@section('breadcrumb')

@endsection

@section('content')

<x-funcionario.form-create
    title="Dados Pessoais"
    subtitle="Contato"
    :action="route('funcionario.dado-pessoal.contatos.store', $funcionario)"
    :routeBack="route('funcionario.dado-pessoal.home.index')"
>
    @include('funcionario.dado-pessoal.contatos.partials.form')
</x-funcionario.form-create>

<x-admin.table
    title="Contatos"
    subtitle="Listagem"
    :headers="['Nome', 'Símbolo', 'Descrição', 'Carga Horária','Ações']"
    :records="$funcionario->contatos"
>
    @forelse ($funcionario->contatos as $funcionarioContato)
    <tr>
        <td class="align-middle">
            {{ $funcionarioContato->nome }}
        </td>
    </tr>
    @empty
    @endforelse
</x-admin.table>

@endsection
