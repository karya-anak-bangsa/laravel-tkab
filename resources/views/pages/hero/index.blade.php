@extends('layouts.backend')
@section('nav-hero', 'active')
@section('content')

    {{-- - 1. Callout Header --}}
    <x-pages.callout>
        Informasi tentang PT. Teknologi Karya Anak Bangsa
    </x-pages.callout>

    {{-- - 2. Card Table --}}
    <x-pages.index-table>

        {{-- card-header --}}
        <x-slot:header></x-slot>

        {{-- table - thead --}}
        <x-slot:thead>
            <tr>
                <th width="20%" class="text-center">Image</th>
                <th width="20%" class="text-left">Title</th>
                <th width="50%" class="text-left">Description</th>
                <th width="10%" class="text-center">Action</th>
            </tr>
        </x-slot>

        {{-- table - tbody --}}
        <x-slot:tbody>
            <tr>
                <td class="text-center">
                    <img src="{{ $data->image_url }}"
                        class="img-thumbnail" loading="lazy"
                        alt="Foto {{ $data->title ?? '-' }}">
                </td>
                <td class="text-left">{{ $data->title ?? '-' }}</td>
                <td class="text-left">{{ $data->description ?? '-' }}</td>
                <td class="text-center">
                    <a href="{{ route('admin.hero.edit', $data->id_hero) }}" class="btn btn-sm btn-warning">
                        <i class="fa-solid fa-edit"></i>
                    </a>
                </td>
            </tr>
        </x-slot>

        {{-- card-footer --}}
        <x-slot:footer>
            <small class="text-danger">
                <div class="text-right">
                    Data Access {{ now()->format('Y/m/d - H:i') }} WIB
                </div>
            </small>
        </x-slot>

    </x-pages.index-table>

@endsection
