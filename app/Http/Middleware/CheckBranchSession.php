<?php

namespace App\Http\Middleware;

use Closure;

class CheckBranchSession
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
        if (!$request->session()->exists('branchmaster')) {
            // user value cannot be found in session
            return redirect('/');
        }
        return $next($request);
    }
}
