@extends('admin.layouts.app')

@section('breadcrumb')

@endsection

@section('content')

<x-admin.form-edit
    title="Cargo"
    subtitle="Edição"
    :action="route('admin.cargos.update', $cargo)"
    :routeBack="route('admin.cargos.index')"
    :model="$cargo"
>
    @include('admin.cargos.partials.form')
</x-admin.form-edit>

@endsection
