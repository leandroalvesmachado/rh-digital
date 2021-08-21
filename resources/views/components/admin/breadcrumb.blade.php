<div class="row">
    <div class="col-12 d-flex justify-content-end">
        <ul class="breadcrumb">
            @if (isset($items) && is_array($items))
                @forelse ($items as $itemKey => $item)
                <li @if ($loop->last) active @endif>
                    <a href="#">{{ $item }}</a>
                </li>
                @empty
                @endforelse
            @endif
        </ul>
    </div>
</div>
