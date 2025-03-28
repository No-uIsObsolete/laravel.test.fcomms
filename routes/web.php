<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/test', function () {
    return view('test');
});

Route::get('/testController', [TestController::class, 'index']);

Route::get('/register', [AuthController::class, 'register']);
Route::post('/register', [AuthController::class, 'registerUser']);

Route::get('/login', [AuthController::class, 'login']);
Route::post('/login', [AuthController::class, 'loginUser']);

Route::get('/dashboard', [DashboardController::class, 'index']);

Route::get('/settings', [SettingsController::class, 'index']);