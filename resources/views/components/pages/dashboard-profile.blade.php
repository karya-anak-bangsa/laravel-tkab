<div class="row">
    <div class="col-lg-12">

        <div class="card card-outline card-info">
            <div class="card-header">
                <span class="text-dark">
                    <i class="fa-solid fa-chart-simple mr-2"></i>{{ $title }}
                </span>
            </div>
            <div class="card-body">
                <table class="table border-bottom">
                    <tr>
                        <td width="20%" class="text-bold">Nama Lengkap</td>
                        <td width="80%" class="text-bold">{{ auth()->user()->full_name }}</td>
                    </tr>
                    <tr>
                        <td width="20%" class="text-bold">Jabatan</td>
                        <td width="80%" class="text-bold">{{ auth()->user()->role }}</td>
                    </tr>
                </table>
            </div>
            <div class="card-footer">
                <div class="d-flex align-items-center justify-content-between">
                    <div class="text-left text-dark">
                        <a href="{{ url('/') }}" class="btn btn-outline-danger">
                            <i class="fa-solid fa-tv mr-2"></i>Back to Landing Pages
                        </a>
                    </div>
                    <div class="text-right text-muted">
                        <span class="text-danger">
                            You logged on {{ now()->format('Y-m-d') }} - {{ now()->format('H:i') }} WIB
                        </span>
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
