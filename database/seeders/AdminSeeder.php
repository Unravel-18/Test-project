<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Role;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (!User::whereHas('role', function($q) {$q->where('title', Role::ADMIN_ROLE);})->exists()) {
            $user  = new User(['name' => 'test_name', 'email' => 'testemail@gmail.com', 'password' => Hash::make('test_password')]);
            $role = Role::where('title', Role::ADMIN_ROLE)->first();
            $user->role()->associate($role);
            $user->save();
        }
    }
}
