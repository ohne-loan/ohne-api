<?php

namespace App\Http\Middleware;

use Closure;

class AfterLogin
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
        $response = $next($request);

        if ( $response->getStatusCode() === 401 ) {
            $response->setContent([
                'error' => 'invalid_credentials',
                'message' => __('auth.invalid_credentials')
            ]);
        }

        return $response;
    }
}
