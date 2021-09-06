@props([
    'action' => '#',
    'title' => '',
    'subtitle' => '',
    'routeBack' => url()->previous()
])

<div class="row">
    <div class="col-12">
        {!! Form::open(['url' => $action, 'class' => '', 'files' => 'true']) !!}
            <div class="card">
                <div class="card-header bg-transparent">
                    <h5 class="card-title text-teal text-uppercase fw-bold">
                        {{ $title }}
                        <span class="badge bg-secondary fw-bold">
                            {{ $subtitle }}
                        </span>
                    </h5>
                </div>
                <div class="card-body">
                    {{ $slot }}
                </div>
                <div class="card-footer bg-transparent">
                    <div class="row justify-content-end">
                        <div class="col-6 col-sm-6 col-md-2 d-grid">
                            <a class="btn btn-info" href="{{ $routeBack }}">
                                <i class="fas fa-backward"></i> Voltar
                            </a>
                        </div>
                        <div class="col-6 col-sm-6 col-md-2 d-grid">
                            <button type="submit" class="btn btn-success">
                                <i class="fas fa-save"></i>
                                Salvar
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        {!! Form::close() !!}
    </div>
</div>
