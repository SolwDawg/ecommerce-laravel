<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo(Request $request): ?string
    {
        return $request->expectsJson() ? null : route('login');
    }

    public function handle($request, Closure $next, ...$guards)
    {
        if (Auth::id() == null)
        {
            return  redirect()->route('auth.admin')->with('error', 'Bạn phải đăng nhập để sử dụng chức năng này');
        }
        return $next($request);
    }
}
