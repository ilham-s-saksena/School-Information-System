<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class MobileApiTest extends TestCase
{
    public function test_web_dashboard(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_login_endpoint(): void
    {
        $response = $this->postJson('/api/login', [
            'email' => 'ilham@tutor.harbang.com',
            'password' => 'Januari@12',
        ]);

        $response->assertStatus(200);

    }

    public function testInvalidEmail(): void
    {
        $response = $this->postJson('/api/login', [
            'email' => 'nonexistent@example.com',
            'password' => 'Harabang.Januari@12',
        ]);

        $response->assertStatus(404)
            ->assertJson([
                'error' => 'Email tidak ditemukan',
            ]);
    }

    public function testInvalidPassword(): void
    {
        $response = $this->postJson('/api/login', [
            'email' => 'ilham@tutor.harbang.com',
            'password' => 'WrongPassword123',
        ]);

        $response->assertStatus(401)
            ->assertJson([
                'error' => 'Password salah',
            ]);
    }

    public function testInvalidCredentials(): void
    {
        $response = $this->postJson('/api/login', [
            'email' => 'ilham@tutor.harbang.cok',
            
        ]);

        $response->assertStatus(404)
            ->assertJson([
                'error' => 'Email atau password salah',
            ]);
    }

}

// Route::middleware('auth:sanctum')->group(function () {

//     Route::get('/dashboard', [ApiController::class, 'dashboard'])->name('dashboard.api');
//     Route::post('/user-data-absen', [ApiController::class, 'viewAbsen'])->name('user-data.api');
//     Route::post('/create-absen', [ApiController::class, 'absen'])->name('create-absen');
//     Route::post('/profile', [ApiController::class, 'profile'])->name('profile');
//     Route::delete('/delete-absen', [ApiController::class, 'deleteAbsen'])->name('delete-absen');

//     Route::post('/absen-siswa', [ApiController::class, 'absen_siswa'])->name('absen_siswa');
//     Route::post('/kehadiran_siswa', [ApiTwoController::class, 'absen_today_api'])->name('kehadiran_siswa');

//     Route::post('/create_materi', [MateriController::class, 'create_materi'])->name('create_materi');
//     Route::get('/read_materi', [MateriController::class, 'read_materi'])->name('read_materi');
// });

// Route::post('/login', [ApiController::class, 'login'])->name('login.api');