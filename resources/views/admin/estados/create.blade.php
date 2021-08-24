@extends('admin.layouts.app')

@section('breadcrumb')

@endsection

@section('content')

<x-admin.form
    title="Estado"
    subtitle="Novo"
    action="{{ route('admin.estados.store') }}"
    routeBack="{{ route('admin.estados.index') }}"
>
    @include('admin.estados.partials.form')
</x-admin.form>

@endsection
