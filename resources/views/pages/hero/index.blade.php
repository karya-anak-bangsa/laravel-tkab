@extends('layouts.backend')
@section('nav-hero', 'active')
@section('content')

    {{-- - 1. Callout Header --}}
    <x-pages.callout>
        Informasi tentang PT. Teknologi Karya Anak Bangsa
    </x-pages.callout>

    {{-- - 2. Card Table --}}
    <x-pages.index-table>

        {{-- table - thead --}}
        <x-slot:thead>
            <tr>
                <th class="text-left">Title</th>
                <th class="text-left">Description</th>
                <th class="text-left">Keywoard</th>
                <th class="text-left">CTA</th>
                <th class="text-center">Action</th>
            </tr>
        </x-slot>

        {{-- table - tbody --}}
        <x-slot:tbody>
            <tr>
                <td class="text-left">{{ $data->title ?? '-' }}</td>
                <td class="text-left">{{ $data->description ?? '-' }}</td>
                <td class="text-left"></td>
                <td class="text-left"></td>
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
