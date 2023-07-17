<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfNotAdmin
{
    public function handle($request, Closure $next)
    {
        if ( !$this->isAdmin()) {
            return redirect('admin/login'); // Modify this as per your requirement
        }

        return $next($request);
    }

    public function isAdmin()
    {
        return session('isAdmin') ?? false;
    }

}
