<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminsOnly
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {



        if (!Auth::check()) {
            return redirect('/admin/login');
        } else {
            $user = Auth::user();
            $is_admin = $user->is_admin;
            
            if ($is_admin) {
                return $next($request);
            } else {
                abort(Response::HTTP_FORBIDDEN);
                return redirect('/admin/login');
            }
        }

        return $next($request);

    }
}
