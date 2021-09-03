@extends('admin.layouts.app')

@section('breadcrumb')

@endsection

@section('content')

<x-admin.filter
    title="Órgãos"
    subtitle="Filtro"
    :route="route('admin.orgaos.index')"
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
    title="Órgãos"
    subtitle="Listagem"
    :headers="['Nome', 'Sigla', 'Estado', 'Município', 'Ativo', 'Ações']"
    :records="$orgaos"
    :route="route('admin.orgaos.create')"
>
    @forelse ($orgaos as $orgao)
    <tr>
        <td class="align-middle">
            {{ $orgao->nome }}
        </td>
        <td class="align-middle">
            {{ $orgao->sigla }}
        </td>
        <td class="align-middle">
            {{ $orgao->estado->nome }}
        </td>
        <td class="align-middle">
            {{ $orgao->municipio->nome }}
        </td>
        <td class="align-middle">
        </td>
        <td class="align-middle">
        </td>
    </tr>
    @empty
    @endforelse
</x-admin.table>

@endsection
