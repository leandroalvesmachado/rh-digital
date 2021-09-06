@extends('auth.layouts.app')

@section('content')

<p class="text-muted text-center mb-4">Login</p>

{!! Form::open(['route' => 'login', 'class' => '']) !!}
    <div class="mb-3">
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
    <div class="mb-3">
        <label class="form-label" for="password">
            * Senha
        </label>
        <input
            id="password"
            type="password"
            class="form-control @error('password') is-invalid @enderror"
            name="password"
            autocomplete="current-password"
            placeholder="Digite a sua senha"
        >
        @error('password')
        <div class="invalid-feedback fs-6 text">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="row mt-4">
        <div class="col-sm-6">
        </div>
        <div class="col-sm-12 text-end d-grid">
            <button class="btn btn-success w-md waves-effect waves-light" type="submit">Entrar</button>
        </div>
    </div>
    <div class="mb-0 row">
        <div class="col-12 mt-4 text-center">
            <a href="{{ route('password.request') }}" class="text-muted">
                <i class="mdi mdi-lock"></i> Esqueceu sua senha? Clique aqui
            </a>
        </div>
    </div>
    <div class="mb-0 row">
        <div class="col-12 mt-4 text-center">
            <a href="{{ route('register') }}" class="text-muted">
                <i class="mdi mdi-lock"></i> Ainda não possui acesso? Cadastre-se aqui
            </a>
        </div>
    </div>
{!! Form::close() !!}

@endsection
