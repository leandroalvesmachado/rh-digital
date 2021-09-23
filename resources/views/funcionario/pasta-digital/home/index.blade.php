@extends('funcionario.layouts.app')

@section('breadcrumb')

@endsection

@section('content')

@foreach ($tipoArquivos->chunk(4) as $chunk)

<div class="row">
    @foreach ($chunk as $tipoArquivo)
    <div class="col-md-3 col-lg-3 col-xl-3 text-uppercase">
        <div class="card">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-md-4 col-lg-4 col-xl-4">
                        <i class="fas fa-folder fa-5x"></i>
                    </div>
                    <div class="col-md-8 col-lg-8 col-xl-8">
                        <a
                            href="{{
                                route('funcionario.pasta-digital.arquivos.create', [
                                    'funcionario' => $usuarioFuncionario,
                                    'tipoArquivo' => $tipoArquivo
                                ])
                            }}"
                            class="stretched-link"
                        >
                            <span class="fs-6">{{ $tipoArquivo->nome }}</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>

@endforeach

@endsection
