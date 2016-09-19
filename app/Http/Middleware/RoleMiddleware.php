<?php

namespace eHOSP\Http\Middleware;

use Closure;
use Auth;

class RoleMiddleware
{
    /**
     * Redirect to home if user has no permission, due to their user_type
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string   $roles
     * @return mixed
     */
    public function handle($request, Closure $next, ...$roles)
    {
        if (!in_array(Auth::user()->user_type, $roles)) {
            // Send 404 error for security purposes
            abort(404);
            // return redirect('home');
        }

        return $next($request);
    }
}
