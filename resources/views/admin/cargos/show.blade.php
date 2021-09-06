@extends('admin.layouts.app')

@section('breadcrumb')

@endsection

@section('content')

<x-admin.show
    title="Cargo"
    subtitle="Detalhes"
    :routeBack="route('admin.cargos.index')"
>
    <div class="row">
        <div class="col-md-4">
            <p>Nome:</p>
            <p>{{ $cargo->nome }}</p>
        </div>
    </div>
</x-admin.show>

<x-admin.modal-destroy>
</x-admin.modal-destroy>

@endsection
