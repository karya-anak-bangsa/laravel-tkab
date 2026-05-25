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
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
