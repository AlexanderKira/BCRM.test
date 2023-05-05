<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ActiveMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (true) {
            return $next($request);
        }

        abort(403);
    }

    protected function isActive(Request $request){
        return true;
    }
}
