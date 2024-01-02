<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AbsenController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\PembayaranController;

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

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {
    
    Route::post('/foto/profile', [HomeController::class, 'foto'])->name('foto.profile');

    Route::prefix('/')->middleware(['auth', 'isUser'])->group(function(){

        Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
        
        Route::post('/absen', [AbsenController::class, 'create'])->name('absen');
        
        Route::get('/absen', [AbsenController::class, 'index'])->name('detail.absen');
        
        Route::post('/absen/filter', [AbsenController::class, 'index'])->name('detail.absen.filter');
        
        Route::get('/absen/delete/{id}', [AbsenController::class, 'destroy'])->name('detail.absen.delete');
   
    });

    Route::prefix('/admin')->middleware(['auth', 'isAdmin'])->group(function(){
        Route::get('/dashboard', [HomeController::class, 'admin_index'])->name('admin.dashboard');
        Route::get('/dashboard/tutor', [HomeController::class, 'tutor_list'])->name('admin.tutor');
        Route::post('/dashboard/tutor/update', [HomeController::class, 'tutor_update'])->name('tutor.update');
        Route::get('/store', [HomeController::class, 'admin_store'])->name('admin.store');
    });

    Route::prefix('/operator')->middleware(['auth', 'isOperator'])->group(function(){
        Route::get('/dashboard', [HomeController::class, 'op_index'])->name('op.dashboard');
        Route::post('/tambah/siswa', [SiswaController::class, 'tambah_siswa'])->name('tambah.siswa');
        Route::post('/tambah/pembayaran', [PembayaranController::class, 'tambah_pembayaran'])->name('tambah.pembayaran');
        Route::get('/bayar/{id}', [PembayaranController::class, 'bayar'])->name('bayar');
        Route::post('/bayar/spp/{id}', [PembayaranController::class, 'bayar_spp'])->name('bayar.spp');
    });


});

