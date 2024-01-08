<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AbsenController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\Auth\LoginsiswaController;
use App\Http\Middleware\AuthenticatedsiswaMiddleware;
use Illuminate\Support\Facades\Storage;

Route::get('/download/{filename}', function ($filename) {
    $filePath = storage_path('app/public/apk/' . $filename);


    if (!Storage::exists('public/apk/' . $filename)) {
        abort(404);
    }

    return response()->download($filePath);
});


Route::get('/', function () {
    return view('welcome');
});

Route::get('/chose-logins', function () {
    return view('pilih-login');
})->name('pilih-login');

Route::get('/download', function () {
    return view('download');
})->name('download');

Route::get('/login-siswa', function () {
    return view('siswa.login-siswa');
})->name('siswa-login');

Route::post('/siswa-login', [LoginsiswaController::class, 'authenticate_siswa'])->name('login-siswa');


Route::middleware(['auth.siswa'])->prefix('/siswa')->group(function () {
    Route::get('/dashboard', [LoginsiswaController::class, 'index'])->name('dashboard-siswa');
    Route::get('/profile', function () {return view('siswa.profile');})->name('siswa-profile');
    Route::post('/profile/ganti', [LoginsiswaController::class, 'profile'])->name('ganti-profile');
    Route::post('/absen', [LoginsiswaController::class, 'absen'])->name('absen-siswa');
    // ...
    Route::post('/logout', [LoginsiswaController::class, 'logout'])->name('siswa.logout');
});


Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {
    
    Route::post('/foto/profile', [HomeController::class, 'foto'])->name('foto.profile');

    Route::prefix('/')->middleware(['auth', 'isUser'])->group(function(){
        Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
        Route::post('/absen', [AbsenController::class, 'create'])->name('absen');
        Route::get('/absen', [AbsenController::class, 'index'])->name('detail.absen');
        Route::get('/absen/filter', [AbsenController::class, 'index'])->name('detail.absen.filter');
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
        Route::get('/bayar/cetak-bukti/{id}', [PembayaranController::class, 'cetak_spp'])->name('cetak.bukti-bayar');
    });


});

