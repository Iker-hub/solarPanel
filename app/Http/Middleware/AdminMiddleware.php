<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware {
    public function handle(Request $request, Closure $next) {
        if (Auth::user() != null) {
            return $next($request);
        }
        return response()->json(['message' => 'User is not logged'], 418);
    }
}
