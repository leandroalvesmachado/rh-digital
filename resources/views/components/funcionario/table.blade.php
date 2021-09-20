<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header bg-transparent">
                <div class="row">
                    <div class="col-6 col-sm-6 col-md-10 justify-content-start">
                        <h5 class="card-title text-teal text-uppercase fw-bold">
                            {{ isset($title) ? $title : '' }}
                            @if(isset($subtitle))
                            <span class="badge bg-secondary fw-bold">
                                {{ $subtitle }}
                            </span>
                            @endif
                        </h5>
                    </div>
                    <div class="d-grid col-6 col-sm-6 col-md-2">
                        {{ isset($slotButton) ? $slotButton : '' }}
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover table-striped table-bordered" style="min-height: 150px;">
                        <thead class="text-center text-uppercase">
                            @if (isset($headers))
                            <tr>
                                @forelse ($headers as $header)
                                <th class="align-middle">{{ $header }}</th>
                                @empty
                                Nenhum valor adicionado
                                @endforelse
                            </tr>
                            @endif
                        </thead>
                        <tbody class="text-center">
                            @if (!$records->isEmpty())
                            {{ $slot }}
                            @else
                            <tr>
                                <td class="align-middle" colspan="7">Nenhum registro encontrado</td>
                            </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer bg-transparent">
                @if ($records)
                <div class="row">
                    @if(method_exists($records,'links'))
                    <div class="col-6 d-flex justify-content-start mt-3">
                        <h6>
                        @if ($records->total() > 0)
                            Exibindo de {{ $records->firstItem() }} até {{ $records->lastItem() }} de {{ $records->total() }} registro(s)
                        @else
                            {{ $records->total() }} registro(s)
                        @endif
                        </h6>
                    </div>
                    <div class="col-6 d-flex justify-content-end mt-2">
                        {{ $records->links() }}
                    </div>
                    @else
                    <div class="col-6 d-flex justify-content-start mt-3">
                        <h6>{{ $records->count() }} registro(s)</h6>
                    </div>
                    <div class="col-6 d-flex justify-content-end mt-2"></div>
                    @endif
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
