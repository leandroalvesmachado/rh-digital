@extends('admin.layouts.app')

@section('breadcrumb')

@endsection

@section('content')

<x-admin.form
    title="Estado"
    subtitle="Edição"
    action="admin.estados.update"
    routeBack="{{ route('admin.estados.index') }}"
    type="edit"
    :model="$estado"
>
    @include('admin.estados.partials.form')
</x-admin.form>

@endsection
