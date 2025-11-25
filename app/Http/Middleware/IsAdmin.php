<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth; // <-- PENTING: Panggil 'Auth'

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // 1. Cek apakah user sudah login DAN rolenya 'admin'
        if (Auth::user() && Auth::user()->role == 'admin') {
            
            // 2. Jika ya, izinkan lanjut ke request berikutnya
            return $next($request);
        }

        // 3. Jika tidak (dia 'nasabah' atau tamu), 
        //    tendang dia kembali ke halaman home
        return redirect('/');
    }
}