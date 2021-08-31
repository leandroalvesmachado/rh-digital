@extends('admin.layouts.app')

@section('breadcrumb')

@endsection

@section('content')

<x-admin.form-edit
    title="Estado"
    subtitle="Edição"
    :action="route('admin.estados.update', $estado)"
    :routeBack="route('admin.estados.index')"
    :model="$estado"
>
    @include('admin.estados.partials.form')
</x-admin.form-edit>

@endsection
