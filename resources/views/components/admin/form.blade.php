<div class="row">
    <div class="col-12">
    @if (isset($type))
        @switch($type)
            @case("create")
                {!! Form::open(['url' => isset($action) ? $action : '#', 'class' => '', 'files' => 'true']) !!}
                @break
            @case("edit")
                {!! Form::model($model, ['route' => [isset($action) ? $action : '#', $model], 'class' => '', 'files' => 'true']) !!}
                {{ method_field('PUT') }}
                @break
        @endswitch
        <div class="card">
            <div class="card-header bg-transparent">
                <h5 class="card-title text-teal text-uppercase fw-bold">
                    {{ isset($title) ? $title : '' }}
                    <span class="badge bg-secondary fw-bold">
                        {{ isset($subtitle) ? $subtitle : '' }}
                    </span>
                </h5>
            </div>
            <div class="card-body">
                {{ $slot }}
            </div>
            <div class="card-footer bg-transparent">
                <div class="row justify-content-end">
                    <div class="col-6 col-sm-6 col-md-2 d-grid">
                        <a class="btn btn-info" href="{{ isset($routeBack) ? $routeBack : url()->previous() }}">
                            <i class="fas fa-backward"></i> Voltar
                        </a>
                    </div>
                    <div class="col-6 col-sm-6 col-md-2 d-grid">
                        <button type="submit" class="btn btn-success">
                            <i class="fas fa-save"></i> Salvar
                        </button>
                    </div>
                </div>
            </div>
        </div>
        {!! Form::close() !!}
    @else
        Adicione o valor type ao componente do formulário
    @endif
    </div>
</div>
