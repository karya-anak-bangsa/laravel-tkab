<div class="row">
    <div class="col-lg-12">

        <div class="card card-outline card-info">
            <div class="card-header">
                <span class="text-info">
                    <i class="fa-solid fa-chart-simple mr-2"></i>{{ $title }}
                </span>
            </div>
            <div class="card-body"></div>
            <div class="card-footer">
                <div class="d-flex align-items-center justify-content-between">
                    <div class="text-left text-dark">
                        <a href="" class="btn btn-outline-danger">
                            <i class="fa-solid fa-tv mr-2"></i>Website Company Profile
                        </a>
                    </div>
                    <div class="text-right text-muted">
                        <small class="text-danger">
                            You logged on {{ now()->format('Y-m-d') }} - {{ now()->format('H:i') }} WIB
                        </small>
                    </div>
                </div>
            </div>
            {{-- card-footer --}}
        </div>
        {{-- card --}}

    </div>
    {{-- col --}}
</div>
{{-- row --}}
