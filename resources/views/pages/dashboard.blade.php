@extends('layouts.backend')

{{-- push styles --}}
@include('components.notify.styles')
@include('components.datatables.styles')

{{-- content --}}
@section('nav-dashboard', 'active')
@section('content')

    @include('components.notify.alert')

    <x-pages.dashboard-profile
        title="Selamat Datang di Halaman Administrator">
    </x-pages.dashboard-profile>

    <div class="row">
        <div class="col-lg-12">
            <div class="card card-outline card-info">
                <div class="card-header"></div>
                <div class="card-body"></div>
                <div class="card-footer"></div>
            </div>
        </div>
        {{-- col --}}
    </div>
    {{-- row --}}

@endsection

{{-- push scripts --}}
@include('components.notify.scripts')
@include('components.datatables.scripts')
