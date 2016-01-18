<?php

namespace Ibi\Http\Middleware;

use Closure;

class SchedeMiddleware
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

        if ($request->route('type') == "schede_tecniche" && (!$request->user() || ! $request->user()->can("scarica_allegati"))) {
            return redirect()->to('/?login=true');
        }
        return $next($request);
    }
}
