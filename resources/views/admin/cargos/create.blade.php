@extends('admin.layouts.app')

@section('breadcrumb')

<x-admin.breadcrumb
    :items="['Estados', 'Novo Estado']"
/>

@endsection

@section('content')

<x-admin.form-create
    title="Cargo"
    subtitle="Novo"
    :action="route('admin.cargos.store')"
    :routeBack="route('admin.cargos.index')"
>
    @include('admin.cargos.partials.form')
</x-admin.form-create>

@endsection
