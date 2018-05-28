<?php

namespace App\Http\Middleware;

use Closure;

class TestMiddleware
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
        $path = $request->path();
        $ip   = $request->ip();
        $str = '['.date("Y-m-d H:i:s").']'.$ip.'----'.$path;
        file_put_contents('request.log.txt',$str."\r\n",FILE_APPEND);
        return $next($request);
    }
}
