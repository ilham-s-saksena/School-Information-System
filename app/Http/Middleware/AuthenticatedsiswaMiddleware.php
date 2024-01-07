<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // Tambahkan ini

class AuthenticatedsiswaMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): \Symfony\Component\HttpFoundation\Response // Ubah tipe kembaliannya menjadi Symfony Response
    {
        if (Auth::guard('siswa')->check()) { // Gunakan guard 'siswa' untuk memeriksa autentikasi siswa
            return $next($request);
        }

        return redirect('/login-siswa');
    }
}
