<?php

namespace App\Http\Middleware;

use App\Exceptions\ApiException;
use Closure;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @param $permission
     * @return mixed
     * @throws ApiException
     */
    public function handle($request, Closure $next, $permission)
    {
        if ( ! $request->user()->hasPermissionTo($permission) ) {
            throw new ApiException('Permissão negada.', 403);
        }

        return $next($request);
    }
}
