<?php

namespace App\Services;

use App\Models\User;
use App\Models\Role;

class UserService
{
    public function store(array $data): User
    {
        //DTO (интересно изучитьeeeeeeeewaser5resa)
        $role = Role::where('title', Role::USER_ROLE)->first();
        $user = new User($data);
        $user->role()->associate($role);
        $user->password = Hash::make($data['password']);
        $user->save();

        return $user;
    }
}
