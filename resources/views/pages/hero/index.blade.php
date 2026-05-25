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
    {{-- TABLE --}}
    {{-- ----------------------------------------------------------------------- --}}
    <x-pages.index-table>

        {{-- table - thead --}}
        <x-slot:thead>
            <tr>
                <th width="15%" class="text-left">Title</th>
                <th width="40%" class="text-left">Description</th>
                <th width="20%" class="text-left">Keywoard</th>
                <th width="20%" class="text-left">CTA</th>
                <th width="5%" class="text-center">Action</th>
            </tr>
        </x-slot>

        {{-- table - tbody --}}
        <x-slot:tbody>
            <tr>
                <td class="text-left">{{ $data->title ?? '-' }}</td>
                <td class="text-left">{{ $data->description ?? '-' }}</td>
                <td class="text-left">
                    @foreach ($data->keywords() as $keyword)
                        <span class="badge badge-primary badge-custom mb-1">
                            {{ $keyword }}
                        </span>
                    @endforeach
                </td>
                <td class="text-left">
                    @foreach ($data->cta() as $cta)
                        <span class="badge badge-success badge-custom mb-1">
                            {{ $cta }}
                        </span>
                    @endforeach
                </td>
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
