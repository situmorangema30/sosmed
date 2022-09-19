<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class cekbanned
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(auth()->user()->is_blacklist == 0) {
            return $next($request);
        }

        return response('Account '. auth()->user()->username . ' has been banned');
    }
}
