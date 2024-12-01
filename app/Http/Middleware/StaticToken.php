<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class StaticToken
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Static token to validate
        $staticToken = env('STATIC_TOKEN');


        // Check if token is valid
        if ($request->header('Authorization') !== "Bearer $staticToken") {
            return response()->json([
                'error' => 'Unauthorized access. Invalid token.'
            ], 401);
        }
    

        // Proceed with the request
        return $next($request);
    }
}
