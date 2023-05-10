<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ActiveMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if ($this->isActive($request)) {
            return $next($request);
        }

        abort(403);
    }

    protected function isActive(Request $request)
    {
        //$user = $request->user();
        // return $user->active;

        return true; //заблокирован пользователь или нет
    }
}
