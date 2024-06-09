<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class EnsureTokenIsValid
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        $token = $request->bearerToken();

        if (!$token) {
            return $token;
        }

        $userToken = User::where('token', $token)->first();


        // if (!$userToken || $userToken->expires_at < now()) {
        //     return response()->json(['error' => 'Invalid token'], 401);
        // }

        // Defina o usuário autenticado com base no token
        // $request->setUserResolver(function () use ($userToken) {
        //     return $userToken->user;
        // });

        return $next($request);
    }
}
