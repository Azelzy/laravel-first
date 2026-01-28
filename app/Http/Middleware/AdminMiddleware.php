<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Cek apakah user sudah login
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Anda harus login terlebih dahulu.');
        }

        // Optional: Jika ingin mengecek role admin (uncomment jika ada field role di users table)
        // if (Auth::user()->role !== 'admin') {
        //     abort(403, 'Akses ditolak. Anda bukan admin.');
        // }

        return $next($request);
    }
}