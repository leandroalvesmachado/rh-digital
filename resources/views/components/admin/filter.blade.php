<div class="row">
    <div class="col-12">
        <form method="get" action="{{ $route }}" accept-charset="UTF-8" class="form-reset">
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
                            <button type="submit" class="btn btn-success">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                        <div class="col-6 col-sm-6 col-md-2 d-grid">
                            <button type="button" class="btn btn-info" onclick="resetForm()">
                                <i class="fas fa-eraser"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>


