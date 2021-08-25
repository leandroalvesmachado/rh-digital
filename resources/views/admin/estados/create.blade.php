@extends('admin.layouts.app')

@section('breadcrumb')

@endsection

@section('content')

<x-admin.form
    title="Estado"
    subtitle="Novo"
    action="admin.estados.store"
    routeBack="{{ route('admin.estados.index') }}"
    type="create"
>
    @include('admin.estados.partials.form')
</x-admin.form>

@endsection
