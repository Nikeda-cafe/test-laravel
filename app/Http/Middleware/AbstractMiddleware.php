<?php

namespace App\Http\Middleware;

use Closure;

class AbstractMiddleware
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

      $data = [
        'a' => 'x',
        'b' => 'y'
      ];
      $request->merge($data);
        return $next($request);
    }
}
