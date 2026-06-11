<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email'     => ['required', 'email'],
            'password'  => ['required'],
        ]);


        if (Auth::guard('employees')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('admin.dashboard')
                ->with('notify', [
                    'type'      => 'success',
                    'message'   => 'Welcome to PT. Teknologi Karya Anak Bangsa.',
                ]);
        }

        return back()->withInput($request->only('email'))
            ->with('notify', [
                'type'      => 'error',
                'message'   => 'Invalid email or password.',
            ]);
    }

    public function logout(Request $request)
    {
        Auth::guard('employees')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()
            ->route('login')
            ->with('notify', [
                'type'      => 'success',
                'message'   => 'You have been logged out.',
            ]);
    }
}
