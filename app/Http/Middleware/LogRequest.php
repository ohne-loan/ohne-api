<?php

namespace App\Http\Middleware;

use Closure;
use App\Services\LogApiRequestService;

class LogRequest
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
        $logApiRequestService = new LogApiRequestService();
        $logApiRequestService->saveRequest($request);

        return $next($request);
    }

    public function terminate($request, $response)
    {
        $logApiRequestService = new LogApiRequestService();
        $logApiRequestService->saveResponse($request, $response);
    }
}
