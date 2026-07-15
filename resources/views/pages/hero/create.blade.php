@extends('layouts.backend')

{{-- content --}}
@section('nav-hero', 'active')
@section('content')

    {{-- ----------------------------------------------------------------------- --}}
    {{-- CALLOUT --}}
    {{-- ----------------------------------------------------------------------- --}}
    <x-pages.callout>
        <strong>The information about PT. Teknologi Karya Anak Bangsa</strong>
    </x-pages.callout>

    <x-pages.index-form>
        <form action="{{ route('admin.hero.store') }}" method="post" enctype="multipart/form-data" class="confirm-submit">

            @csrf
            @include('pages.hero._form')

            <div class="row">
                <div class="col-lg-2">
                    <a href="{{ route('admin.hero.index') }}" class="btn btn-block btn-secondary">
                        <i class="fas fa-undo mr-2"></i>Back
                    </a>
                </div>
                <div class="col-lg-2">
                    <button type="submit" class="btn btn-block btn-success">
                        <i class="fas fa-save mr-2"></i>Save
                    </button>
                </div>
                {{-- col --}}
            </div>
            {{-- row --}}

        </form>
    </x-pages.index-form>

@endsection
@include('components.sweetalert.scripts-create')
