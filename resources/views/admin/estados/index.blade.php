@extends('admin.layouts.app')

@section('breadcrumb')

<x-admin.breadcrumb
    title="Estados"
    :items="['Estados']"
/>

@endsection

@section('content')

<x-admin.filter
    title="Estados"
    subtitle="Filtro"
    :route="route('admin.estados.index')"
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
    title="Estados"
    subtitle="Listagem"
    model="Estado"
    :headers="['Nome', 'Sigla', 'Ações']"
    :records="$estados"
>
    @forelse ($estados as $estado)
    <tr>
        <td class="align-middle">
            {{ $estado->nome }}
        </td>
        <td class="align-middle">
            {{ $estado->sigla }}
        </td>
        <td class="align-middle">
            <x-admin.action
                :target="$estado->id"
                :object="$estado"
            >
                <a class="dropdown-item" href="{{ route('admin.estados.show', $estado) }}">
                    <i class="fas fa-file-alt"></i> Detalhes
                </a>
                <a class="dropdown-item" data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg">
                    <i class="fa fa-eye"></i> Visualizar
                </a>
            </x-admin.action>
        </td>
    </tr>

    <x-admin.modal
        :target="$estado->id"
        :object="$estado"
    >
        fwfsdfsdfs
    </x-admin.modal>
    @empty
    @endforelse
</x-admin.table>

@endsection
