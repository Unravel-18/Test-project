<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach(Role::ROLES as $roleTitle) {
            if (!Role::where('title', $roleTitle)->exists()) {
                $role = new Role();
                $role->fill(['title' => $roleTitle]);
                $role->save();
            }
        }
    }
}
