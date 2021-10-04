@extends('funcionario.layouts.app')

@section('breadcrumb')

@endsection

@section('content')

<x-funcionario.form-create
    title="Arquivo - {{ $tipoArquivo->nome }}"
    subtitle="Novo"
    :action="route('funcionario.pasta-digital.arquivos.store', [$funcionario, $tipoArquivo])"
    :routeBack="route('funcionario.pasta-digital.home.index')"
>
    @include('funcionario.pasta-digital.arquivos.partials.form')
</x-funcionario.form-create>

<x-funcionario.table
    title="Arquivos"
    subtitle="Listagem"
    :headers="['Nome', 'Descrição', 'Observação', 'Arquivo', 'Data', 'Tamanho', 'Ações']"
    :records="$funcionarioArquivos"
>
    @forelse ($funcionarioArquivos as $funcionarioArquivo)
    <tr>
        <td class="align-middle">
            {{ $funcionarioArquivo->nome }}
        </td>
        <td class="align-middle">
            {{ $funcionarioArquivo->descricao }}
        </td>
        <td class="align-middle">
            {{ $funcionarioArquivo->observacao }}
        </td>
        <td class="align-middle">
            {{ $funcionarioArquivo->arquivo }}
        </td>
        <td class="align-middle">
            {{ $funcionarioArquivo->created_at }}
        </td>
        <td class="align-middle">
            {{ $funcionarioArquivo->byte_size }}
        </td>
        <td class="align-middle">
            <x-funcionario.action
                :target="$funcionarioArquivo->id"
                :object="$funcionarioArquivo"
            >
                <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#modal-{{ $funcionarioArquivo->id }}">
                    <i class="fa fa-eye"></i> Visualizar
                </a>
                <a class="dropdown-item" href="">
                    <i class="fas fa-user-edit"></i> Download
                </a>
            </x-funcionario.action>
        </td>
    </tr>
    @empty
    @endforelse
</x-funcionario.table>

@endsection
