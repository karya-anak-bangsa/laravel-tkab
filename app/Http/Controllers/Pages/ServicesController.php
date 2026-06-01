<?php

namespace App\Http\Controllers\Pages;

use App\Models\Services;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index()
    {
        $data = Services::with('activeServicesFeatures')->ordered()->get();
        return view('pages.services.index', compact('data'));
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
