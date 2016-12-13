<?php

/**

  Company Middleware

 */

namespace App\Http\Middleware;

use Closure;
use Auth;
class Admin {

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    function handle($request, Closure $next) {
        if (Auth::user()->roles!="admin") {
            if ($request->ajax() || $request->wantsJson()) {
                return response('Unauthorized.', 401);
            }
            return redirect()->guest('login');
        }
        return $next($request);
    }

}
