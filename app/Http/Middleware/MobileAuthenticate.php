<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class MobileAuthenticate
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param  Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return Response|RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (!$request->header('Authorization'))
            abort(419, 'Please add authorization token');
        if ($request->header('Authorization') !== 'Bearer ey431413413413')
            abort(419, 'Please add correct authorization token');
        return $next($request);
    }
}
