@extends('admin.layouts.app')

@section('breadcrumb')

<x-admin.breadcrumb
    :items="['Estados', 'Novo Estado']"
/>

@endsection

@section('content')

<x-admin.form-create
    title="Estado"
    subtitle="Novo"
    :action="route('admin.estados.store')"
    :routeBack="route('admin.estados.index')"
>
    @include('admin.estados.partials.form')
</x-admin.form-create>

@endsection
