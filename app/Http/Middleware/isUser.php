<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class isUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check()) {
            if (Auth::user()->role_id == '1') {
                // Jika pengguna adalah admin, dialihkan ke rute admin
                return redirect('admin')->with('success', 'Kamu Sudah Login sebagai Admin');
            } elseif (Auth::user()->role_id == '2') {
                return redirect('dokter')->with('success', 'Kamu Sudah Login sebagai Dokter');
            }
        } else {
            // Jika belum ada yang login, lanjutkan ke request berikutnya
            return $next($request);
        }
    }
}
