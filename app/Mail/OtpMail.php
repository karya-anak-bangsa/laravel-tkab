<?php

namespace App\Mail;

use App\Models\Employees;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OtpMail extends Mailable
{
    use Queueable, SerializesModels;

    public Employees $employees;

    public function __construct(Employees $employees)
    {
        $this->employees = $employees;
    }

    public function build()
    {
        return $this
            ->subject('PT. Teknologi Karya Anak Bangsa - Verification Code')
            ->view('auth.otp-mail')
            ->with([
                'employees' => $this->employees,
            ]);
    }
}
