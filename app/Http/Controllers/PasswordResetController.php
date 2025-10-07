<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Services\OtpService;
use App\Models\User;

class PasswordResetController extends Controller
{
    protected OtpService $otpService;

    public function __construct(OtpService $otpService)
    {
        $this->otpService = $otpService;
    }

    public function requestOtp(Request $request)
    {
        $request->validate(['email' => 'required|email|exists:users,email']);
        $this->otpService->generateOtp($request->email);

        // setelah kirim otp, arahkan ke halaman input OTP
        return redirect()->route('password.verify.form', ['email' => $request->email]);
    }

    public function verifyOtp(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'otp'   => 'required'
        ]);

        if ($this->otpService->verifyOtp($request->email, $request->otp)) {
            return redirect()->route('password.reset.form', ['email' => $request->email]);
        }

        return back()->withErrors(['otp' => 'OTP salah atau kadaluarsa']);
    }

    public function resetPassword(Request $request)
    {
        $request->validate([
            'email'    => 'required|email|exists:users,email',
            'password' => 'required|confirmed|min:6'
        ]);

        // ganti kolom password jadi pass
        User::where('email', $request->email)
            ->update(['pass' => Hash::make($request->password)]);

        return redirect()->route('login')->with('status', 'Password berhasil direset');
    }
}
