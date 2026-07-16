@extends('layouts.backend')

{{-- push styles --}}
@include('components.datatables.styles')
@include('components.notify.styles')

{{-- content --}}
@section('nav-hero', 'active')
@section('content')

    {{-- ----------------------------------------------------------------------- --}}
    {{-- ALERT --}}
    {{-- ----------------------------------------------------------------------- --}}
    @include('components.notify.alert')

    {{-- ----------------------------------------------------------------------- --}}
    {{-- CALLOUT --}}
    {{-- ----------------------------------------------------------------------- --}}
    <x-pages.callout>
        <strong>The information about PT. Teknologi Karya Anak Bangsa</strong>
    </x-pages.callout>

    {{-- ----------------------------------------------------------------------- --}}
    {{-- TABLE --}}
    {{-- ----------------------------------------------------------------------- --}}
    <x-pages.index-table>

        {{-- card-header --}}
        <x-slot name="header">
            <a href="{{ route('admin.hero.create') }}" class="btn btn-success">
                <i class="fa-solid fa-circle-plus mr-2"></i><span>Add Data</span>
            </a>
        </x-slot>

        {{-- table - thead --}}
        <x-slot name="thead">
            <tr>
                <th class="text-center">No</th>
                <th class="text-left">Title and Description</th>
                <th class="text-left">Keywoard</th>
                <th class="text-left">CTA</th>
                <th class="text-center">Status</th>
                <th class="text-center text-nowrap">Action</th>
            </tr>
        </x-slot>

        {{-- table - tbody --}}
        <x-slot name="tbody">
            @foreach ($heroes as $hero)
                <tr>
                    <td class="text-center">{{ $loop->iteration }}</td>
                    <td class="text-left">
                        <strong>{{ $hero->title ?? '-' }}</strong><br>
                        <small>{!! $hero->description ?? '-' !!}</small>
                    </td>
                    <td class="text-left">
                        @foreach ($hero->keyword() as $keyword)
                            <span class="badge badge-primary badge-custom mb-1">
                                {{ $keyword }}
                            </span>
                        @endforeach
                    </td>
                    <td class="text-left">
                        @foreach ($hero->cta() as $cta)
                            <span class="badge badge-primary badge-custom mb-1">
                                {{ $cta }}
                            </span>
                        @endforeach
                    </td>
                    <td class="text-center">
                        <span class="badge {{ $hero->is_active ? 'badge-success' : 'badge-danger' }} badge-custom">
                            {{ $hero->is_active ? 'Active' : 'Disable' }}
                        </span>
                    </td>
                    <td class="text-center text-nowrap">

                        {{-- UPDATE --}}
                        <a href="{{ route('admin.hero.edit', $hero->id_hero) }}" class="btn btn-sm btn-warning">
                            <i class="fa-solid fa-edit"></i>
                        </a>

                        {{-- DELETE --}}
                        <form action="{{ route('admin.hero.destroy', $hero->id_hero) }}" method="post" enctype="multipart/form-data" class="confirm-submit d-inline">
                            @csrf @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">
                                <i class="fas fa-trash"></i>
                            </button>
                        </form>

                    </td>
                </tr>
            @endforeach
        </x-slot>

        {{-- card-footer --}}
        <x-slot name="footer">
            <small class="text-danger">
                <div class="text-right">Data Access {{ now()->format('Y/m/d - H:i') }} WIB</div>
            </small>
        </x-slot>

    </x-pages.index-table>
@endsection

{{-- push scripts --}}
@include('components.datatables.scripts')
@include('components.notify.scripts')
@include('components.sweetalert.scripts-destroy')
