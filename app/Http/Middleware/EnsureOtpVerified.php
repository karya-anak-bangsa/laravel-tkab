<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class EnsureOtpVerified
{
    public function handle(Request $request, Closure $next): Response
    {
        $employees = Auth::guard('employees')->user();

        if (!$employees) {
            return redirect()->route('login');
        }

        if (is_null($employees->otp_verified_at)) {
            return redirect()
                ->route('verify.email.create', $employees->id_employees)
                ->with('notify', [
                    'type'      => 'warning',
                    'message'   => 'Please verify your email first.',
                ]);
        }

        return $next($request);
    }
}
