<?php

namespace App\Http\Controllers\Pages;

use App\Models\Hero;
use App\Http\Controllers\Controller;
use App\Http\Requests\Pages\Hero\StoreHeroRequest;
use App\Http\Requests\Pages\Hero\UpdateHeroRequest;
use Illuminate\Support\Facades\Storage;

class HeroController extends Controller
{
    public function index()
    {
        $heroes = Hero::latest()->paginate(10);
        return view('pages.hero.index', compact('heroes'));
    }

    public function show(string $id)
    {
        //
    }

    public function create()
    {
        return view('pages.hero.create');
    }

    // public function store(Request $request)
    public function store(StoreHeroRequest $request)
    {
        $data = $request->validated();
        $data['image'] = $request->file('image')->store('hero', 'public');

        Hero::create($data);

        return redirect()
            ->route('admin.hero.index')
            ->with('notify', [
                'type'      => 'info',
                'message'   => 'Data successfully created.',
            ]);
    }

    public function edit(Hero $hero)
    {
        return view('pages.hero.edit', compact('hero'));
    }

    public function update(UpdateHeroRequest $request, Hero $hero)
    {
        $data = $request->validated();
        if ($request->hasFile('image')) {
            if ($hero->image) {
                Storage::disk('public')->delete($hero->image);
            }
            $data['image'] = $request->file('image')->store('hero', 'public');
        }

        $hero->update($data);

        return redirect()
            ->route('admin.hero.index')
            ->with('notify', [
                'type'      => 'info',
                'message'   => 'Data successfully updated.',
            ]);
    }

    public function destroy(Hero $hero)
    {
        $hero->update([
            'is_active' => false,
            'updated_at' => now(),
            'deleted_at' => now(),
        ]);
        return redirect()
            ->route('admin.hero.index')
            ->with('notify', [
                'type'      => 'info',
                'message'   => 'Data successfully deleted.',
            ]);
    }
}
