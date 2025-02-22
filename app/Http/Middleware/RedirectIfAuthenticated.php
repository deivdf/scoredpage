<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string ...$guards): Response
    {
        $guards = empty($guards) ? [null] : $guards;
        
        foreach ($guards as $guard) {
            // if (Auth::guard($guard)->check()) {
            //     $user = Auth::guard($guard)->user();
                
                // Verificar el role_id del usuario y redirigir según corresponda
            //     if ($user->role_id === 1) {
            //         return redirect()->route('admin.home');  // Redirige a la vista del administrador
            //     } elseif ($user->role_id === 2) {
            //         return redirect()->route('profile.home');  // Redirige a la vista del cliente
            //     } elseif ($user->role_id === 3) {
            //         return redirect()->route('provider.home');  // Redirige a la vista del proveedor
            //     }
            // }
        }

    return $next($request);
    }
}
