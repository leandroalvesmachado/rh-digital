@props([
    'target' => '',
    'title' => ''
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
                    {{ $slot }}
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>
