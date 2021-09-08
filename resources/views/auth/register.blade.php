@extends('auth.layouts.app')

@section('content')

<p class="text-muted text-center mb-4">Cadastre-se</p>

{!! Form::open(['route' => 'register', 'class' => '']) !!}
    <div class="mb-2">
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
    <div class="mb-2">
        <label class="form-label" for="email">
            * E-mail
        </label>
        <input
            id="email"
            type="email"
            class="form-control @error('email') is-invalid @enderror"
            name="email"
            value="{{ old('email') }}"
            autocomplete="email"
            placeholder="Digite o seu e-mail"
        >
        @error('email')
        <div class="invalid-feedback fs-6 text">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="mb-2">
        <label class="form-label" for="password">
            * Senha
        </label>
        <input
            id="password"
            class="form-control @error('password') is-invalid @enderror"
            type="password"
            name="password"
            autocomplete="new-password"
            placeholder="Digite a sua senha"
        />
        @error('password')
        <div class="invalid-feedback fs-6 text">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="mb-2">
        <label class="form-label" for="password_confirmation">
            * Confirmar Senha
        </label>
        <input
            id="password_confirmation"
            class="form-control @error('password_confirmation') is-invalid @enderror"
            type="password"
            name="password_confirmation"
            placeholder="Digite a sua senha"
        />
        @error('password_confirmation')
        <div class="invalid-feedback fs-6 text">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="row mt-4">
        <div class="col-sm-12 text-end d-grid">
            <button class="btn btn-success" type="submit">
                <i class="fas fa-save"></i> Salvar
            </button>
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-sm-12 text-end d-grid">
            <a class="btn btn-info" href="{{ route('login') }}">
                <i class="fas fa-backward"></i> Voltar
            </a>
        </div>
    </div>
{!! Form::close() !!}

@endsection
