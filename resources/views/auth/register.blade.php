@extends('auth.layouts.app')

@section('content')

<p class="text-muted text-center mb-4">Cadastre-se</p>

{!! Form::open(['route' => 'register', 'class' => '']) !!}
    <div class="mb-3">
        <label class="form-label" for="name">
            * Nome
        </label>
        <input
            id="name"
            type="name"
            class="form-control @error('name') is-invalid @enderror"
            name="name"
            value="{{ old('name') }}"
            autocomplete="name"
            placeholder="Digite o seu nome"
        >
        @error('name')
        <div class="invalid-feedback fs-6 text">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="row mt-4">
        <div class="col-sm-12 text-end d-grid">
            <button class="btn btn-success w-md waves-effect waves-light" type="submit">Salvar</button>
        </div>
    </div>
{!! Form::close() !!}

@endsection
