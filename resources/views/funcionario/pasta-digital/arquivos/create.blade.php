@extends('funcionario.layouts.app')

@section('breadcrumb')

@endsection

@section('content')

<x-funcionario.form-create
    title="Arquivo"
    subtitle="Novo"
    :action="route('funcionario.pasta-digital.arquivos.store', [$funcionario, $tipoArquivo])"
    :routeBack="route('funcionario.pasta-digital.home.index')"
>
    @include('funcionario.pasta-digital.arquivos.partials.form')
</x-funcionario.form-create>

@endsection
