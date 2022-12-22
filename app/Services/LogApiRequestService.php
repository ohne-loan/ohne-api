<?php

namespace App\Services;

use App\Models\ApiRequestLog;
use Illuminate\Http\Request;

class LogApiRequestService
{
    /**
     * Save the log of the request
     * @param  \Illuminate\Http\Request $request
     * @return void
     */
    public function saveRequest(Request $request) : void
    {
        $logApiRequest = new ApiRequestLog();

        $logApiRequest->authenticated_user_email = null;
        $logApiRequest->route = $request->getRequestUri();
        $logApiRequest->title = 'Log API Request';
        $logApiRequest->request = \json_encode($request->toArray());
        $logApiRequest->origin_ip = $request->ip();
        $logApiRequest->log_level = ApiRequestLog::INFORMATION;
        $logApiRequest->headers_request = \json_encode($request->headers->__toString());
        
        $this->save($logApiRequest);
    }

    /**
     * Save the log of the response
     * @param  \Illuminate\Http\Request $request
     * @param  any $response
     * @return void
     */
    public function saveResponse(Request $request, $response) : void
    {
        $logApiRequest = new ApiRequestLog();

        $logApiRequest->authenticated_user_email = null;
        $logApiRequest->route = $request->getRequestUri();
        $logApiRequest->title = 'Log API Response';
        $logApiRequest->request = \json_encode($request->toArray());
        $logApiRequest->response = \json_encode($response);
        $logApiRequest->http_status_code_response = $response->getStatusCode();
        $logApiRequest->origin_ip = $request->ip();
        $logApiRequest->log_level = ApiRequestLog::INFORMATION;
        $logApiRequest->headers_request = \json_encode($request->headers->__toString());
        $logApiRequest->headers_response = \json_encode($response->headers->__toString());
        
        $this->save($logApiRequest);
    }

    /**
     * Save the log in the database. If occurs errors, the error will be throw to the Bugsnag
     * @param ApiRequestLog $logApiRequest
     * @return void
     */
    private function save(ApiRequestLog $logApiRequest) : void
    {
        try {
            if(!$this->canBeInserted($logApiRequest)){
                return;
            }

            $logApiRequest->save();
        } catch (\Exception $e) {
            handle($e, $e->getMessage(), 500);
        }
    }

    private function canBeInserted(ApiRequestLog $logApiRequest) : bool
    {
        switch ($logApiRequest->route) {
            case '/api/cron/healthcheck':
                return false;
            default:
                return true;
        }
    }
}
