<?php

namespace App\Http\Middleware;

use Closure;

class CreateAdminMiddleware
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
        $value = session()->get('AdminID');
        if($value>1)
        {
            return redirect('admin/dashboard');
        }
        return $next($request);
    }
}
