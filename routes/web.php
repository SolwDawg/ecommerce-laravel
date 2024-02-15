<?php

use App\Http\Controllers\Backend\AuthController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Middleware\Authenticate;
use App\Http\Middleware\LoginMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('dashboard/index', [DashboardController::class, 'index'])->name('dashboard.index')->middleware(Authenticate::class);

Route::get('admin', [AuthController::class, 'index'])->name('auth.admin')-> middleware(LoginMiddleware::class);
Route::post('login', [AuthController::class, 'login'])->name('auth.login');
Route::get('logout', [AuthController::class, 'logout'])->name('auth.logout');
