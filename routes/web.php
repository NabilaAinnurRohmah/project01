<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CipherController;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [AuthController::class, 'showLogin']);
Route::post('/login', [AuthController::class, 'login']);

Route::get('/forgot-password', [AuthController::class, 'forgotPassword']);
Route::post('/forgot-password', [AuthController::class, 'checkUsername']);
Route::post('/reset-password', [AuthController::class, 'resetPassword']);

Route::get('/dashboard', [AuthController::class, 'dashboard']);
Route::get('/logout', [AuthController::class, 'logout']);

Route::get('/caesar', [CipherController::class, 'index']);
Route::post('/caesar', [CipherController::class, 'proses']);
