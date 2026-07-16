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

    {{-- ----------------------------------------------------------------------- --}}
    {{-- FORM --}}
    {{-- ----------------------------------------------------------------------- --}}
    <x-pages.index-form>
        <form action="{{ route('admin.hero.update', $hero->id_hero) }}" method="post" enctype="multipart/form-data" class="confirm-submit">

            @csrf
            @method('PUT')
            @include('pages.hero._form')

            {{-- ----------------------------------------------------------------------- --}}
            {{-- BUTTON --}}
            {{-- ----------------------------------------------------------------------- --}}
            <div class="row mb-0">
                <div class="col-lg-2">
                    <a href="{{ route('admin.hero.index') }}" class="btn btn-block btn-secondary">
                        <i class="fas fa-undo mr-2"></i>Back
                    </a>
                </div>
                <div class="col-lg-2">
                    <button type="submit" class="btn btn-block btn-warning">
                        <i class="fas fa-edit mr-2"></i>Edit
                    </button>
                </div>
            </div>

        </form>
    </x-pages.index-form>

@endsection
@include('components.sweetalert.scripts-edit')
