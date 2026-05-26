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
            action="{{-- route('admin.hero.update', $data->id_hero) --}}"
            method="POST"
            enctype="multipart/form-data">

            @csrf
            @method('PUT')

            {{-- ----------------------------------------------------------------------- --}}
            {{-- MAIN CONTENT --}}
            {{-- ----------------------------------------------------------------------- --}}
            <div class="row mb-4">
                <div class="col-lg-12">
                    <x-pages.form-input-text
                        label="Title"
                        name="title"
                        :value='$data->title'
                        :required=true>
                    </x-pages.form-input-text>
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
            <div class="row mb-4">
                <div class="col-lg-4">
                    <x-pages.form-input-text
                        label="Keyword Pertama"
                        name="keywords_1"
                        :value='$data->keywords_1 ?? null'
                        :required=false>
                    </x-pages.form-input-text>
                </div>
                <div class="col-lg-4">
                    <x-pages.form-input-text
                        label="Keyword Kedua"
                        name="keywords_2"
                        :value='$data->keywords_2 ?? null'
                        :required=false>
                    </x-pages.form-input-text>
                </div>
                <div class="col-lg-4">
                    <x-pages.form-input-text
                        label="Keyword Ketiga"
                        name="keywords_3"
                        :value='$data->keywords_3 ?? null'
                        :required=false>
                    </x-pages.form-input-text>
                </div>
                <div class="col-lg-4">
                    <x-pages.form-input-text
                        label="Keyword Keempat"
                        name="keywords_4"
                        :value='$data->keywords_4 ?? null'
                        :required=false>
                    </x-pages.form-input-text>
                </div>
                <div class="col-lg-4">
                    <x-pages.form-input-text
                        label="Keyword Kelima"
                        name="keywords_5"
                        :value='$data->keywords_5 ?? null'
                        :required=false>
                    </x-pages.form-input-text>
                </div>
            </div>

            {{-- ----------------------------------------------------------------------- --}}
            {{-- CTA --}}
            {{-- ----------------------------------------------------------------------- --}}
            <div class="row mb-4">
                <div class="col-lg-4">
                    <x-pages.form-input-text
                        label="CTA Pertama"
                        name="cta_1"
                        :value='$data->cta_1 ?? null'
                        :required=false>
                    </x-pages.form-input-text>
                </div>
                <div class="col-lg-4">
                    <x-pages.form-input-text
                        label="CTA Kedua"
                        name="cta_2"
                        :value='$data->cta_2 ?? null'
                        :required=false>
                    </x-pages.form-input-text>
                </div>
            </div>

            {{-- ----------------------------------------------------------------------- --}}
            {{-- IMAGE --}}
            {{-- ----------------------------------------------------------------------- --}}
            <div class="row mb-4">
                <div class="col-sm-12">
                    <x-pages.form-input-file
                        label="Hero Image"
                        name="image"
                        :value="$data->image_url">
                    </x-pages.form-input-file>
                </div>
            </div>

            {{-- ----------------------------------------------------------------------- --}}
            {{-- BUTTON --}}
            {{-- ----------------------------------------------------------------------- --}}
            <div class="row mb-0">
                <x-pages.form-button-link
                    buttonLink=""
                    buttonColor="secondary" icon="fa-undo">Back
                </x-pages.form-button-link>
                <x-pages.form-button
                    buttonType="submit" buttonColor="warning" icon="fa-edit">Edit
                </x-pages.form-button>
            </div>

        </form>
    </x-pages.index-form>

@endsection
