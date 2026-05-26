<?php

namespace App\Http\Controllers\Pages;

use App\Models\Hero;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        ]);

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
                'type'      => 'success',
                'message'   => 'Data successfully updated.',
            ]);
    }

    public function destroy(string $id)
    {
        //
    }
}
