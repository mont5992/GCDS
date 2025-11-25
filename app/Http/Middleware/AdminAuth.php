<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
{
   
    if (!session()->has('admin_logged_in')) {

        
        if ($request->ajax()) {
            return response()->json([
                'error' => 'Unauthenticated',
            ], 401);
        }

      
        return redirect('/login')->with('error', 'Please login first.');
    }

    return $next($request);
}

}
