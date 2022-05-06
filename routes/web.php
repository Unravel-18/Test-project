<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;


Route::get('/', function () { return view('welcome'); })->name('home');

Route::prefix('admin')->group(function(){
    Route::post('login', [AdminController::class, 'loginData'])->name('admin.loginData');
    Route::get('login', [AdminController::class, 'loginView'])->name('admin.loginView');

    Route::middleware(['admin'])->group(function(){
        Route::get('dashboard',[AdminController::class, 'dashboardView'])->name('admin.dashboard');

        Route::resource('users', UserController::class);
    });
});
Route::get('/dashboard', function () {return view('dashboard');})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
