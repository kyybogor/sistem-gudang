<?php

// app/Services/OtpService.php
namespace App\Services;

use App\Models\PasswordOtp;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use App\Mail\OtpMail;

class OtpService
{
    public function generateOtp(string $email): void
    {
        $otp = rand(100000, 999999);

        PasswordOtp::create([
            'email' => $email,
            'otp' => $otp,
            'expired_at' => Carbon::now()->addMinutes(10),
        ]);

        Mail::to($email)->send(new OtpMail($otp));
    }

    public function verifyOtp(string $email, string $otp): bool
    {
        $record = PasswordOtp::where('email', $email)
            ->where('otp', $otp)
            ->where('expired_at', '>', Carbon::now())
            ->first();

        return (bool) $record;
    }
}

