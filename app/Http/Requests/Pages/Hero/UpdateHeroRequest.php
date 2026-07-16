<?php

namespace App\Http\Requests\Pages\Hero;

use Illuminate\Foundation\Http\FormRequest;

class UpdateHeroRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title'       => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'image'       => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp', 'max:2048'],
            'keyword_1'   => ['required', 'string', 'max:100'],
            'keyword_2'   => ['required', 'string', 'max:100'],
            'keyword_3'   => ['required', 'string', 'max:100'],
            'keyword_4'   => ['nullable', 'string', 'max:100'],
            'keyword_5'   => ['nullable', 'string', 'max:100'],
            'cta_1'       => ['required', 'string', 'max:100'],
            'cta_2'       => ['required', 'string', 'max:100'],
        ];
    }
}
