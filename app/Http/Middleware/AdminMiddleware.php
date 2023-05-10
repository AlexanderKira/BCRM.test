<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if ($this->isAdmin($request)) {
            return $next($request);
        }

        abort(403);
    }

    protected function isAdmin(Request $request)
    {
        //$user = $request->user();
        // return $user->active;

        return false; //заблокирован пользователь или нет
    }
}
