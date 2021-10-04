@extends('admin.layouts.app')

@section('breadcrumb')

<x-admin.breadcrumb
    :items="['Usuários', 'Novo Usuário']"
/>

@endsection

@section('content')

<x-admin.form-create
    title="Usuário"
    subtitle="Novo"
    :action="route('admin.usuarios.store')"
    :routeBack="route('admin.usuarios.index')"
>
    @include('admin.usuarios.partials.form')
</x-admin.form-create>

@endsection
