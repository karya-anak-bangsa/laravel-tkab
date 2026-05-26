@extends('layouts.backend')
@section('nav-hero', 'active')
@section('content')

    {{-- ----------------------------------------------------------------------- --}}
    {{-- CALLOUT --}}
    {{-- ----------------------------------------------------------------------- --}}
    <x-pages.callout>
        Informasi tentang PT. Teknologi Karya Anak Bangsa
    </x-pages.callout>

    {{-- ----------------------------------------------------------------------- --}}
    {{-- FORM --}}
    {{-- ----------------------------------------------------------------------- --}}
    <x-pages.index-form>
        <form
            action  = "{{ route('admin.hero.update', $data->id_hero) }}"
            method  = "post"
            enctype = "multipart/form-data"
            class="confirm-submit">

            @csrf
            @method('PUT')

            {{-- ----------------------------------------------------------------------- --}}
            {{-- MAIN CONTENT --}}
            {{-- ----------------------------------------------------------------------- --}}
            <div class="row">
                <div class="col-lg-12">
                    <x-pages.form-input-text
                        label="Title"
                        name="title"
                        :value='$data->title'
                        :required=true>
                    </x-pages.form-input-text>
                </div>
                <div class="col-lg-12">
                    <x-pages.form-input-textarea
                        label="Description"
                        name="description"
                        :value='$data->description'
                        :required=true>
                    </x-pages.form-input-textarea>
                </div>
            </div>

            {{-- ----------------------------------------------------------------------- --}}
            {{-- KEYWORDS --}}
            {{-- ----------------------------------------------------------------------- --}}

            {{-- ----------------------------------------------------------------------- --}}
            {{-- CTA --}}
            {{-- ----------------------------------------------------------------------- --}}

            {{-- ----------------------------------------------------------------------- --}}
            {{-- IMAGE --}}
            {{-- ----------------------------------------------------------------------- --}}

            {{-- ----------------------------------------------------------------------- --}}
            {{-- BUTTON --}}
            {{-- ----------------------------------------------------------------------- --}}
            <div class="row">
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
