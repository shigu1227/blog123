<?php

namespace App\Http\Middleware;

use Closure;

class CheckLogin
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
      $srart = strtotime("9:00:00");
      $end = strtotime("17:00:00");
      $_now_ = time();
      if($_now_ >= $srart && $_now_ <= $end){

      }else{
          dd('当前时间不能访问');
      }
        return $next($request);
    }
}
