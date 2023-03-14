<?php

namespace App\Repository;

use App\Models\User;
use App\Repository\Interface\UserInterface;

class UserRepository implements UserInterface
{
    public function create($data)
    {
        return User::create($data);
    }

    public function update($user, $data)
    {
        $user->update($data);
        return $user;
    }

    public function delete($user)
    {
        return $user->delete();
    }

    public function find($id)
    {
        return User::find($id);
    }

    public function getAll()
    {
        return User::all();
    }
}

