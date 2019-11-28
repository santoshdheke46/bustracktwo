<?php

namespace SsGroup\BusTracking\App\Http\Middleware;

use Closure;

class DeveloperMode
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (config('bus.dev_mode') == 'true'){
            return $next($request);
        }
        abort(404);
    }
}
