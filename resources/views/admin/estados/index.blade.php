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
            <div class="btn-group me-1 mt-2 dropstart">
                <button
                    type="button"
                    class="btn btn-success dropdown-toggle"
                    data-bs-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                >
                    <i class="fas fa-cog"></i>
                    <i class="mdi mdi-chevron-down"></i>
                </button>
                <div class="dropdown-menu" style="">
                    <a class="dropdown-item" href="{{ route('admin.estados.show', $estado) }}">
                        <i class="fas fa-file-alt"></i> Detalhes
                    </a>
                </div>
            </div>
        </td>
    </tr>
    @empty
    <tr>
        <td class="align-middle" colspan="3">Nenhum registro encontrado</td>
    </tr>
    @endforelse
</x-admin.table>

@endsection
