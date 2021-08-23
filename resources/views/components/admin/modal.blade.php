<div
    id="modal-{{ $target }}"
    class="modal fade bs-example-{{ isset($size) ? $size : 'modal' }}"
    tabindex="-1"
    aria-labelledby="modal-{{ $target }}"
    aria-hidden="true"
>
    {{ $slot }}
</div>
