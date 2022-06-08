<?php

namespace Layerok\Restapi\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Session;

class CustomSession
{
    public function handle(Request $request, Closure $next)
    {
        $session_id = input('session_id');
        Session::put('cart_session_id', $session_id);

        return $next($request);
    }

}
