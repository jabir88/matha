<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class Admin
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
      // if (Auth::user()->role_id >= 3 ) {
      if (Auth::user()->role_id != 1 && Auth::user()->role_id != 2) {
        return redirect('admin/permission');
      }
        return $next($request);
    }

}
