<?php

namespace App\Http\Controllers\Auth;

use App\Models\Employees;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
    public function index()
    {
        #
    }

    public function create()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        # validation process
        $validated = $request->validate([
            'full_name' => ['required', 'string', 'max:255'],
            'role'      => ['required', 'string', 'max:255'],
            'email'     => ['required', 'email', 'max:255', 'unique:tb_employees,email'],
            'password'  => ['required', 'string', 'min:8'],
        ]);

        # employee onboarding process
        Employees::create($validated);

        # return values
        return redirect()
            ->route('login')
            ->with('notify', [
                'type'      => 'info',
                'message'   => 'Registration Successful.',
            ]);
    }
}
