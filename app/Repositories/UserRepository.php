<?php

namespace App\Repositories;

use App\Models\User;

class UserRepository
{
    public function findByUsername($username)
    {
        return User::where('nm_user', $username)->first();
    }

    public function getAll()
    {
        return User::all();
    }

    public function findById($id)
    {
        return User::find($id);
    }

    public function create(array $data)
    {
        return User::create($data);
    }
}
