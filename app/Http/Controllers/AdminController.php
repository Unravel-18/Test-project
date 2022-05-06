<?php

namespace App\Http\Controllers;

use DB;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\AdminLoginDataRequest;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function loginData(AdminLoginDataRequest $request)
    {
        $user = User::where('email', $request['email'])->first();
        if($user && Hash::check($request['password'], $user->password)) {
            Auth::login($user);
            return redirect()->route('admin.dashboard');
        }

        return redirect()->back();

    }


    public function loginView()
    {
        $user = Auth::user();
        if($user && $user->role->title === Role::ADMIN_ROLE) {
            return redirect()->route('admin.dashboard');
        }
        return view('admin_login');
    }

    public function dashboardView()
    {
        return view('admin_dashboard');
    }
}
