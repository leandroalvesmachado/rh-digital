{{---
<div class="row">
    @if (isset($items) && is_array($items))
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            @forelse ($items as $itemKey => $item)
            <li class="breadcrumb-item @if ($loop->last) active @endif">
                <a href="#">{{ $item }}</a>
            </li>
            @empty
            @endforelse
        </ol>
    </nav>
    @endif
</div>
---}}
