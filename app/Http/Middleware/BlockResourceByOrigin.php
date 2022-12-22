<?php

namespace App\Http\Middleware;

use Closure;
use App\Exceptions\ApiException;

class BlockResourceByOrigin
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
        if (env('APP_ENV') !== 'prod') {
            return $next($request);
        }

        $this->verifyIfRequestIsAuthorized();
    
        return $next($request);
    }

    public function verifyIfRequestIsAuthorized()
    {
        $sendInvoices = '/api/cron/emails';
        $queueWork = '/api/cron/queueWork?--timeout=240';
        $postBackD4Sign = '/api/loans/notification';
        $postBackJuno = '/api/invoice/notification';

        $resource = \tryGetValueArray($_SERVER, 'REQUEST_URI');
        $originIp = \tryGetValueArray($_SERVER, 'HTTP_X_FORWARDED_FOR');

        switch ($resource) {
            case $sendInvoices:
            case $queueWork:
                if ($originIp !== env('REMOTE_IP_RUNDECK')) {
                    $message = "Permission denied. resource: {$resource} | originIp: {$originIp}";
                    $exception =  new \Exception($message);

                    \handle($exception, $message, 401, true);
                }
                break;
            case $postBackD4Sign:
                if ($originIp !== env('REMOTE_IP_D4SIGN_1') &&
                    $originIp !== env('REMOTE_IP_D4SIGN_2') &&
                    $originIp !== env('REMOTE_IP_D4SIGN_3') &&
                    $originIp !== env('REMOTE_IP_D4SIGN_4')) {
                    $message = "Permission denied. resource: {$resource} | originIp: {$originIp}";
                    $exception =  new \Exception($message);

                    \handle($exception, $message, 401, true);
                }
                break;
            case $postBackJuno:
                if ($originIp !== env('REMOTE_IP_JUNO')) {
                    $message = "Permission denied. resource: {$resource} | originIp: {$originIp}";
                    $exception =  new \Exception($message);

                    \handle($exception, $message, 401, true);
                }
                break;
            default:
                break;
        }
    }
}
