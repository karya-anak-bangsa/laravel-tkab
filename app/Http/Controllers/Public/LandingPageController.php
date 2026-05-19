<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

# list model untuk ditampilkan dihalaman frontend
use App\Models\Hero;

class LandingPageController extends Controller
{
    public function index()
    {

        # Query untuk menampilkan data dari database
        $hero = Hero::first();

        # return values
        return view('public.main', compact(
            'hero',
        ));

        // return view('layouts.frontend');
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
