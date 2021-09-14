@extends('funcionario.layouts.app')

@section('breadcrumb')

@endsection

@section('content')

<x-funcionario.form-create
    title="Dados Pessoais"
    subtitle="Identificação"
    :action="route('funcionario.dado-pessoal.identificacoes.store')"
    :routeBack="route('funcionario.dado-pessoal.home.index')"
>
    @include('funcionario.dado-pessoal.identificacoes.partials.form')
</x-funcionario.form-create>

@endsection
