<?php

namespace App\Http\Middleware;

use Closure;
use Session;
class UserMiddleWare
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
        if(Session('UserType')=='user'){
            return $next($request);
          }
          else{
              return redirect('/login');
          }
    
    }
}
