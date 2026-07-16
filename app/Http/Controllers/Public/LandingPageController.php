<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

# list model untuk ditampilkan dihalaman frontend
use App\Models\Hero;
use App\Models\Services;

class LandingPageController extends Controller
{
    public function index()
    {
        $hero       = Hero::where('is_active', true)->latest()->get();
        $services   = Services::with('activeServicesFeatures')->active()->ordered()->get();

        return view('public.main', compact(
            'hero',
            'services',
        ));
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
        //
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
