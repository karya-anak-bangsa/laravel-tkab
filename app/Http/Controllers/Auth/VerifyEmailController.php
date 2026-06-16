<?php

namespace App\Http\Controllers\Auth;

use App\Models\Employees;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VerifyEmailController extends Controller
{

    public function create(string $id)
    {
        $employees = Employees::findOrFail($id);
        return view(
            'auth.verify-email',
            compact('employees')
        );
    }

    public function store(Request $request, string $id)
    {
        $validated = $request->validate([
            'otp_code' => ['required', 'digits:6'],
        ]);

        $employees = Employees::findOrFail($id);

        // sudah verified
        if ($employees->hasOtpVerified()) {

            return redirect()->route('login')
                ->with('notify', [
                    'type' => 'success',
                    'message' => 'Your email has already been verified.',
                ]);
        }

        // otp expired
        if ($employees->isOtpExpired()) {

            return back()->with('notify', [
                'type' => 'error',
                'message' => 'Verification code has expired.',
            ]);
        }

        // otp tidak cocok
        if ($employees->otp_code !== $validated['otp_code']) {

            return back()->with('notify', [
                'type' => 'error',
                'message' => 'Invalid verification code.',
            ]);
        }

        $employees->update([
            'otp_verified_at' => now(),
            'otp_code' => null,
            'otp_expired_at' => null,
        ]);

        return redirect()->route('login')
            ->with('notify', [
                'type' => 'success',
                'message' => 'Email verification successful. Please login.',
            ]);
    }
}
