<div class="btn-group dropstart" role="group">
    <button
        id="action-{{ $target }}"
        type="button"
        class="btn btn-secondary dropdown-toggle"
        data-bs-toggle="dropdown"
        aria-haspopup="true"
        aria-expanded="false"
    >
        <i class="fas fa-cog"></i>
        <i class="mdi mdi-chevron-down"></i>
    </button>
    <div
        class="dropdown-menu"
        aria-labelledby="action-{{ $target }}"
    >
        {{ $slot }}
    </div>
</div>
