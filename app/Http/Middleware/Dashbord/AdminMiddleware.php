<?php

namespace App\Http\Middleware\Dashbord;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
   
    public function handle($request, Closure $next)
            {
                $user = Auth::user();
        
                if (!$user || !$user->hasRole()) {
                    abort(403, 'Unauthorized.');
                }
        
                return $next($request);
            }
    }

