<?php

namespace App\Http\Controllers\Auth;

use App\Models\Employees;
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
        # Proses validasi input dari form login
        $credentials = $request->validate([
            'email'     => ['required', 'email'],
            'password'  => ['required'],
        ]);

        $employees = Employees::where('email', $credentials['email'])->first();
        if (!$employees) {
            return back()
                ->withInput($request->only('email'))
                ->with('notify', [
                    'type'      => 'error',
                    'message'   => 'Invalid email or password.',
                ]);
        }

        if (!$employees->hasOtpVerified()) {
            return back()
                ->withInput($request->only('email'))
                ->with('notify', [
                    'type'      => 'warning',
                    'message'   => 'Please verify your email first.',
                ]);
        }

        # Proses autentikasi.
        # Jika email + password sesuai maka akan berpindah ke halaman dashboard
        if (Auth::guard('employees')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('admin.dashboard')
                ->with('notify', [
                    'type'      => 'success',
                    'message'   => 'Welcome to Dashboard Administrator.',
                ]);
        }

        # Jika email + password tidak sesuai maka akan muncul notify "Invalid email or password"
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
                'type'      => 'error',
                'message'   => 'You have been logged out.',
            ]);
    }
}
