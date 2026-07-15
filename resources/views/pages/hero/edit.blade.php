@extends('layouts.backend')
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
        <form action  = "{{ route('admin.hero.update', $data->id_hero) }}" method="post" enctype="multipart/form-data" class="confirm-submit">

            @csrf
            @method('PUT')

            {{-- ----------------------------------------------------------------------- --}}
            {{-- MAIN CONTENT --}}
            {{-- ----------------------------------------------------------------------- --}}
            <div class="row mb-3">
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
                <div class="col-lg-12">
                    <x-pages.form-input-file
                        label="Hero Image"
                        name="image"
                        :value='$data->image_url'
                        :required=true>
                    </x-pages.form-input-file>
                </div>
            </div>

            {{-- ----------------------------------------------------------------------- --}}
            {{-- KEYWORDS --}}
            {{-- ----------------------------------------------------------------------- --}}
            <div class="row mb-3">
                <div class="col-lg-4">
                    <x-pages.form-input-text
                        label="First keyword"
                        name="keywords_1"
                        :value='$data->keywords_1'
                        :required=false>
                    </x-pages.form-input-text>
                </div>
                <div class="col-lg-4">
                    <x-pages.form-input-text
                        label="Second keyword"
                        name="keywords_2"
                        :value='$data->keywords_2'
                        :required=false>
                    </x-pages.form-input-text>
                </div>
                <div class="col-lg-4">
                    <x-pages.form-input-text
                        label="Third keyword"
                        name="keywords_3"
                        :value='$data->keywords_3'
                        :required=false>
                    </x-pages.form-input-text>
                </div>
                <div class="col-lg-4">
                    <x-pages.form-input-text
                        label="Fourth keyword"
                        name="keywords_4"
                        :value='$data->keywords_4'
                        :required=false>
                    </x-pages.form-input-text>
                </div>
                <div class="col-lg-4">
                    <x-pages.form-input-text
                        label="Fifth keyword"
                        name="keywords_5"
                        :value='$data->keywords_5'
                        :required=false>
                    </x-pages.form-input-text>
                </div>
            </div>

            {{-- ----------------------------------------------------------------------- --}}
            {{-- CTA --}}
            {{-- ----------------------------------------------------------------------- --}}
            <div class="row mb-3">
                <div class="col-lg-4">
                    <x-pages.form-input-text
                        label="Call to Action"
                        name="cta_1"
                        :value='$data->cta_1'
                        :required=false>
                    </x-pages.form-input-text>
                </div>
                <div class="col-lg-4">
                    <x-pages.form-input-text
                        label="Call to Action"
                        name="cta_2"
                        :value='$data->cta_2'
                        :required=false>
                    </x-pages.form-input-text>
                </div>
            </div>

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
