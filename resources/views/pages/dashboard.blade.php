@extends('layouts.backend')
@section('nav-dashboard', 'active')
@section('content')

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
