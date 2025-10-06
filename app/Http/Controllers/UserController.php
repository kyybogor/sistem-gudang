<?php

namespace App\Http\Controllers;

use App\Services\UserService;
use Illuminate\Http\Request;

class UserController extends Controller
{
    private $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function login(Request $request)
    {
        $username = $request->input('nm_user');
        $password = $request->input('password');

        $user = $this->userService->login($username, $password);

        if ($user) {
            $request->session()->put('user', $user);
            return redirect('/dashboard');
        }

        return back()->with('error', 'Username atau password salah');
    }

    public function authenticate(Request $request)
    {
        return $this->login($request);
    }
}
