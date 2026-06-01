<?php

namespace App\Http\Controllers\Pages;

use App\Models\Hero;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HeroController extends Controller
{
    public function index()
    {
        $data = Hero::first();
        return view('pages.hero.index', compact('data'));
    }

    public function show(string $id)
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function edit(string $id)
    {
        $data = Hero::findOrFail($id);
        return view('pages.hero.edit', compact('data'));
    }

    public function update(Request $request, string $id)
    {

        # ---------------------------------------------------------------------- #
        # VALIDATION
        # ---------------------------------------------------------------------- #
        $validated = $request->validate([
            'title'         => ['required', 'string', 'max:255',],
            'description'   => ['nullable', 'string',],
            'image'         => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp', 'max:4096',],
            'keywords_1'    => ['nullable', 'string', 'max:255',],
            'keywords_2'    => ['nullable', 'string', 'max:255',],
            'keywords_3'    => ['nullable', 'string', 'max:255',],
            'keywords_4'    => ['nullable', 'string', 'max:255',],
            'keywords_5'    => ['nullable', 'string', 'max:255',],
            'cta_1'         => ['nullable', 'string', 'max:255',],
            'cta_2'         => ['nullable', 'string', 'max:255',],
        ]);

        # ---------------------------------------------------------------------- #
        # UPLOAD IMAGE
        # ---------------------------------------------------------------------- #
        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('hero', 'public');
        }

        # ---------------------------------------------------------------------- #
        # FIND DATA dan UPDATE DATA
        # ---------------------------------------------------------------------- #
        $data = Hero::findOrFail($id);
        $data->update($validated);

        # ---------------------------------------------------------------------- #
        # REDIRECT
        # ---------------------------------------------------------------------- #
        return redirect()
            ->route('admin.hero.index')
            ->with('notify', [
                'type'      => 'info',
                'message'   => 'Data successfully updated.',
            ]);
    }

    public function destroy(string $id)
    {
        //
    }
}
