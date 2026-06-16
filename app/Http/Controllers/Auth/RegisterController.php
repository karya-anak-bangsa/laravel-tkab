<?php

namespace App\Http\Controllers\Auth;

use App\Mail\OtpMail;
use App\Models\Employees;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;


class RegisterController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'full_name' => ['required', 'string', 'max:255'],
            'role'      => ['required', 'string', 'max:255'],
            'email'     => ['required', 'email', 'max:255', 'unique:tb_employees,email'],
            'password'  => ['required', 'string', 'min:8'],
        ]);

        $employees = Employees::create([

            # informasi pegawai
            'full_name'         => $validated['full_name'],
            'role'              => $validated['role'],
            'email'             => $validated['email'],
            'password'          => $validated['password'],

            # informasi otp
            'otp_code'          => random_int(100000, 999999),
            'otp_expired_at'    => now()->addMinutes(5),
            'otp_verified_at'   => null,

        ]);


        Mail::to($employees->email)->send(new OtpMail($employees));


        // return redirect()->route('login')->with('notify', [
        //     'type'      => 'success',
        //     'message'   => 'Registration Successful.',
        // ]);

        return redirect()->route('verify.email.create', $employees->id_employees)->with('notify', [
            'type'      => 'success',
            'message'   => 'Verification code has been sent to your email.',
        ]);
    }
}
