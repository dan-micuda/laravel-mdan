<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckSomething
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Logic for your middleware
        $allowedIps = ['123.456.789.0', '192.168.8.11'];  
        //if (in_array($request->ip(), $allowedIps)) {
        //    return response()->json(['message' => 'Condition met'], 200);
        //}

        //return response()->json(['message' => 'Condition not met'], 403);
        \Log::info('CheckSomething middleware executed');
        return $next($request);
    }
}
