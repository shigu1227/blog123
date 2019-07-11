<?php

namespace App\Http\Middleware;

use Closure;

class Login
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
        // 前置中间件
        // 先指向中间件在指向方法
        // echo 1111;

         $response = $next($request);
         // 后置中间件
         // 先执行完方法在执行后置中间件
        // echo 22222;

        return $response;
    }
}
