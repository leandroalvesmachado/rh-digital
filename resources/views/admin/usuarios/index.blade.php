@extends('admin.layouts.app')

@section('breadcrumb')

@endsection

@section('content')

<x-admin.filter
    title="Usuários"
    subtitle="Filtro"
    :route="route('admin.usuarios.index')"
>
    <div class="row">
        <div class="col-md-4">
            <label for="name" class="form-label">Nome</label>
            {!!
                Form::text('name', request()->get('name'), [
                    'id' => 'name',
                    'class' => 'form-control'
                ])
            !!}
        </div>
    </div>
</x-admin.filter>

<x-admin.table
    title="Usuários"
    subtitle="Listagem"
    :headers="['Nome', 'E-mail', 'Ações']"
    :records="$usuarios"
>
    @can('create', App\Models\Usuario::class)
    <x-slot name="slotButton">
        <a class="btn btn-success" href="{{ route('admin.usuarios.create') }}" role="button">
            <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i> Usuário
        </a>
    </x-slot>
    @endcan

    @forelse ($usuarios as $usuario)
    <tr>
        <td class="align-middle">
            {{ $usuario->name }}
        </td>
        <td class="align-middle">
            {{ $usuario->email }}
        </td>
        <td class="align-middle">
            <x-admin.action
                :target="$usuario->id"
                :object="$usuario"
            >
                <a class="dropdown-item" href="{{ route('admin.usuarios.show', $usuario) }}">
                    <i class="fas fa-file-alt"></i> Detalhes
                </a>
                <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#modal-{{ $usuario->id }}">
                    <i class="fa fa-eye"></i> Visualizar
                </a>
                @can('update', $usuario)
                <a class="dropdown-item" href="{{ route('admin.usuarios.edit', $usuario) }}">
                    <i class="fas fa-user-edit"></i> Editar
                </a>
                @endcan
            </x-admin.action>
        </td>
    </tr>

    <x-admin.modal
        title="Usuário: {{ $usuario->name }}"
        :target="$usuario->id"
        :object="$usuario"
        size="lg"
    >
        <div class="row">
            <div class="col-md-6">
                <p><strong>Nome:</strong></p>
                <p>{{ $usuario->name }}</p>
            </div>
        </div>
    </x-admin.modal>
    @empty
    @endforelse
</x-admin.table>

@endsection
