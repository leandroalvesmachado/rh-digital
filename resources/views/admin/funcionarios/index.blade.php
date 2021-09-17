@extends('admin.layouts.app')

@section('breadcrumb')

@endsection

@section('content')

<x-admin.filter
    title="Funcionários"
    subtitle="Filtro"
    :route="route('admin.funcionarios.index')"
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
    title="Funcionários"
    subtitle="Listagem"
    :headers="['CPF', 'Nome', 'Data Nasc', 'E-mail Inst', 'Celular', 'PCD', 'Ações']"
    :records="$funcionarios"
>
    @can('create', App\Models\Funcionario::class)
    <x-slot name="slotButton">
        <a class="btn btn-success" href="{{ route('admin.funcionarios.create') }}" role="button">
            <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i> Funcionário
        </a>
    </x-slot>
    @endcan

    @forelse ($funcionarios as $funcionario)
    <tr>
        <td class="align-middle">
            {{ $funcionario->cpf }}
        </td>
        <td class="align-middle">
            {{ $funcionario->nome }}
        </td>
        <td class="align-middle">
            {{ $funcionario->data_nascimento }}
        </td>
        <td class="align-middle">
            {{ $funcionario->email_institucional }}
        </td>
        <td class="align-middle">
            {{ $funcionario->telefone_celular }}
        </td>
        <td class="align-middle">
            {{ $funcionario->pcd }}
        </td>
        <td class="align-middle">
            <x-admin.action
                :target="$funcionario->id"
                :object="$funcionario"
            >
                <a class="dropdown-item" href="{{ route('admin.funcionarios.show', $funcionario) }}">
                    <i class="fas fa-file-alt"></i> Detalhes
                </a>
                <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#modal-{{ $funcionario->id }}">
                    <i class="fa fa-eye"></i> Visualizar
                </a>
                @can('update', $funcionario)
                <a class="dropdown-item" href="{{ route('admin.funcionarios.edit', $funcionario) }}">
                    <i class="fas fa-user-edit"></i> Editar
                </a>
                @endcan
            </x-admin.action>
        </td>
    </tr>

    <x-admin.modal
        title="Funcionário: {{ $funcionario->nome }}"
        :target="$funcionario->id"
        :object="$funcionario"
        size="lg"
    >
        <div class="row">
            <div class="col-md-6">
                <p><strong>Nome:</strong></p>
                <p>{{ $funcionario->nome }}</p>
            </div>
        </div>
    </x-admin.modal>
    @empty
    @endforelse
</x-admin.table>

@endsection
