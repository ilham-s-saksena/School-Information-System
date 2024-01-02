<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->group(function () {

    Route::get('/dashboard', [ApiController::class, 'dashboard'])->name('dashboard.api');
    Route::post('/user-data-absen', [ApiController::class, 'viewAbsen'])->name('user-data.api');
    Route::post('/create-absen', [ApiController::class, 'absen'])->name('create-absen');
    Route::post('/profile', [ApiController::class, 'profile'])->name('profile');
    Route::delete('/delete-absen', [ApiController::class, 'deleteAbsen'])->name('delete-absen');
});

Route::post('/login', [ApiController::class, 'login'])->name('login.api');
Route::post('/register', [ApiController::class, 'register'])->name('register.api');