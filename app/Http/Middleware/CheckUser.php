<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {


    if(auth()->user()->stutas=='user')
    {
       flash()->warning('Unauthorized Edit and Delete any information anthor Users.');
        return redirect()->back();    
    }
        return $next($request);
    }
}
