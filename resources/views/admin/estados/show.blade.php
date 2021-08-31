@extends('admin.layouts.app')

@section('breadcrumb')

<x-admin.breadcrumb
    :items="['Estados', 'Novo Estado']"
/>

@endsection

@section('content')

<x-admin.show
    title="Estado"
    subtitle="Detalhes"
    :routeBack="route('admin.estados.index')"
>
    <div class="row">
        <div class="col-md-4">
            <p>Nome:</p>
            <p>{{ $estado->nome }}</p>
        </div>
        <div class="col-md-4">
            <p>Sigla:</p>
            <p>{{ $estado->sigla }}</p>
        </div>
        <div class="col-md-4">
            <p>Código IBGE:</p>
            <p>{{ $estado->codigo_ibge }}</p>
        </div>
    </div>
</x-admin.show>

<x-admin.table
    title="Municípios"
    :records="$estado->municipios"
    :headers="['Nome', 'Código IBGE', 'Status']"
>
    @forelse ($estado->municipios as $municipio)
    <tr>
        <td class="align-middle">
            {{ $municipio->nome }}
        </td>
        <td class="align-middle">
            {{ $municipio->codigo_ibge }}
        </td>
        <td class="align-middle">
            {{ $municipio->isAtivo() }}
        </td>
    </tr>
    @empty
    @endforelse
</x-admin.table>

@endsection
