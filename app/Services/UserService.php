<?php

namespace App\Services;

use App\Repositories\UserRepository;
use Illuminate\Support\Facades\Hash;

class UserService
{
    private $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function login($username, $password)
    {
        $user = $this->userRepository->findByUsername($username);

        // cek password hash
        if ($user && Hash::check($password, $user->pass)) {
            return $user;
        }

        return null;
    }

    public function register(array $data)
    {
        // hash password sebelum simpan
        $data['pass'] = Hash::make($data['password']);
        unset($data['password']);

        return $this->userRepository->create($data);
    }
}
