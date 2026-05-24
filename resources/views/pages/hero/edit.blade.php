@extends('layouts.backend')
@section('nav-hero', 'active')
@section('content')

    <x-pages.callout>
        Informasi tentang PT. Teknologi Karya Anak Bangsa
    </x-pages.callout>

    <x-pages.index-form>

        <div class="row">
            <div class="col-lg-12">
                <x-pages.form-input-text
                    label="Title"
                    name="title"
                    :value='$data->title ?? null'
                    :required=true>
                </x-pages.form-input-text>
            </div>
        </div>

    </x-pages.index-form>

@endsection
