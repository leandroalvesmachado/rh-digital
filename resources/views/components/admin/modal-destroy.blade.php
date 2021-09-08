@props([
    'title' => '',
    'target' => '',
    'object' => '',
    'size' => '',
    'message' => '',
    'action' => '#'
])

<div
    id="modal-destroy-{{ $target }}"
    class="modal fade bs-example-{{ isset($size) ? 'modal-'.$size : 'modal' }}"
    tabindex="-1"
    aria-labelledby="modal-destroy-{{ $target }}"
    aria-hidden="true"
>
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable {{ isset($size) ? 'modal-'.$size : 'modal' }}">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0">{{ $title }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row text-danger text-center">
                        <div class="col-md-12">
                            <h5>{{ $message }}</h5>
                        </div>
                    </div>
                    {{ $slot }}
                </div>
            </div>
            <div class="modal-footer">
                <div class="container-fluid">
                    <form method="post" action="{{ $action }}">
                        <input type="hidden" name="id" value="{{ $object->id }}">
                        <div class="row">
                            <div class="col-md-6 d-grid">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-success">
                                    <i class="fas fa-check-circle"></i> Sim
                                </button>
                            </div>
                            <div class="col-md-6 d-grid">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                    <i class="fas fa-times-circle"></i> Não
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
