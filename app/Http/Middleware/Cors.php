<?php

namespace App\Http\Middleware;

use Closure;

class Cors
{
    private static $allowedOriginsWhitelist = [
      'http://localhost:3000',
      
      'http://ohne.com.br',
      'https://ohne.com.br',
      
      'http://www.ohne.com.br',
      'https://www.ohne.com.br',

      'https://development.ohne.com.br',
      'https://homologation.ohne.com.br'
    ];

    // All the headers must be a string

    private static $allowedOrigin = 'https://ohne.com.br';

    private static $allowedMethods = 'OPTIONS, GET, POST, PUT, PATCH, DELETE';

    private static $allowCredentials = 'true';

    private static $allowedHeaders = '';

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
      if (!$this->isCorsRequest($request))
      {
        $routesAllowedToBeAccessedWithourCors = array(
            '/api/cron/emails',
            '/api/cron/queueWork?--timeout=240',
            '/api/loans/notification',
            '/api/invoice/notification',
            '/api/cron/healthcheck'
        );

        $route = \tryGetValueArray($_SERVER, 'REQUEST_URI');
        $originIp = \tryGetValueArray($_SERVER, 'HTTP_X_FORWARDED_FOR');

        if(!isset($route)){
            $message = "Permission denied. route: {$route} | originIp: {$originIp}";
            $exception =  new \Exception($message);

            \handle($exception, $message, 401, true);
        }

        if(!in_array($route, $routesAllowedToBeAccessedWithourCors)){
            $message = "Permission denied. This route can't be accessed without CORS request. route: {$route} | originIp: {$originIp}";
            $exception =  new \Exception($message);

            \handle($exception, $message, 401, true);
        }

        return $next($request);
      }

      static::$allowedOrigin = $this->resolveAllowedOrigin($request);

      static::$allowedHeaders = $this->resolveAllowedHeaders($request);

      $headers = [
        'Access-Control-Allow-Origin'       => static::$allowedOrigin,
        'Access-Control-Allow-Methods'      => static::$allowedMethods,
        'Access-Control-Allow-Headers'      => static::$allowedHeaders,
        'Access-Control-Allow-Credentials'  => static::$allowCredentials,
      ];

      // For preflighted requests
      if ($request->getMethod() === 'OPTIONS')
      {
        return response('', 200)->withHeaders($headers);
      }

      $response = $next($request)->withHeaders($headers);

      return $response;
    }

    /**
     * Incoming request is a CORS request if the Origin
     * header is set and Origin !== Host
     *
     * @param  \Illuminate\Http\Request  $request
     */
    private function isCorsRequest($request)
    {
      $requestHasOrigin = $request->headers->has('Origin');

      if ($requestHasOrigin)
      {
        $origin = $request->headers->get('Origin');

        $host = $request->getSchemeAndHttpHost();

        if ($origin !== $host)
        {
          return true;
        }
      }

      return false;
    }

    /**
     * Dynamic resolution of allowed origin since we can't
     * pass multiple domains to the header. The appropriate
     * domain is set in the Access-Control-Allow-Origin header
     * only if it is present in the whitelist.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    private function resolveAllowedOrigin($request)
    {
      $allowedOrigin = static::$allowedOrigin;

      // If origin is in our $allowedOriginsWhitelist
      // then we send that in Access-Control-Allow-Origin

      $origin = $request->headers->get('Origin');

      if (in_array($origin, static::$allowedOriginsWhitelist))
      {
        $allowedOrigin = $origin;
      }

      return $allowedOrigin;
    }

    /**
     * Take the incoming client request headers
     * and return. Will be used to pass in Access-Control-Allow-Headers
     *
     * @param  \Illuminate\Http\Request  $request
     */
    private function resolveAllowedHeaders($request)
    {
      $allowedHeaders = $request->headers->get('Access-Control-Request-Headers');

      return $allowedHeaders;
    }
}