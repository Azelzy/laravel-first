<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        // belum login
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        // bukan admin
        // if (auth()->user()->role !== 'admin') {
        //     abort(403, 'ANDA BUKAN ADMIN');
        // }

        return $next($request);
    }
}