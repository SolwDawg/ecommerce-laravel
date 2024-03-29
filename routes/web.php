<?php

use App\Http\Controllers\Ajax\LocationController;
use App\Http\Controllers\Backend\AuthController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Middleware\Authenticate;
use App\Http\Middleware\LoginMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('dashboard/index', [DashboardController::class, 'index'])->name('dashboard.index')->middleware('auth');

Route::get('admin', [AuthController::class, 'index'])->name('auth.admin')->middleware('login');
Route::post('login', [AuthController::class, 'login'])->name('auth.login');
Route::get('logout', [AuthController::class, 'logout'])->name('auth.logout');

// USER
Route::group(['prefix' => 'user'], function () {
    Route::get('/', [UserController::class, 'index'])->name('user.index')->middleware('auth');
    Route::get('index', [UserController::class, 'index'])->name('user.index')->middleware('auth');
    Route::get('create', [UserController::class, 'create'])->name('user.create')->middleware('auth');
    Route::post('store', [UserController::class, 'store'])->name('user.store')->middleware('auth');
    Route::get('{id}/edit', [UserController::class, 'edit'])->where(['id' => '[0-9]+'])->name('user.edit')->middleware('auth');
    Route::post('{id}/update', [UserController::class, 'update'])->where(['id' => '[0-9]+'])->name('user.update')->middleware('auth');
    Route::get('{id}/delete', [UserController::class, 'delete'])->name('user.delete')->middleware('auth');
    Route::delete('{id}/destroy', [UserController::class, 'destroy'])->name('user.destroy')->middleware('auth');
});

// AJAX
Route::get('ajax/location/getLocation', [LocationController::class, 'getLocation'])->name('ajax.location.index');
