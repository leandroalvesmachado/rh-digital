@extends('funcionario.layouts.app')

@section('breadcrumb')

@endsection

@section('content')

<x-funcionario.form-edit
    title="Dados Pessoais"
    subtitle="Identificação"
    :action="route('funcionario.dado-pessoal.identificacoes.update', $funcionario)"
    :routeBack="route('funcionario.dado-pessoal.home.index')"
    :model="$funcionario"
>
    @include('funcionario.dado-pessoal.identificacoes.partials.form')
</x-funcionario.form-edit>

@endsection
