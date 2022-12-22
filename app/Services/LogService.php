<?php

namespace App\Services;

use App\Models\Log;
use Exception;
use App\Exceptions\ApiException;

class LogService
{
    public function insertLogException(Exception $exception) : void
    {
        $log = new Log();

        if ($exception instanceof ApiException) {
            $log->title = 'Handled exception';
        } else {
            $log->title = 'Unhandled exception';
        }

        $log->message = $exception->getMessage();
        $log->exception = \json_encode($exception->__toString());
        $log->details = \json_encode($exception->getTraceAsString());
        $log->log_level = Log::ERROR;
        
        $this->insertLog($log);
    }

    /**
     * Insert the log in the database. If occurs errors, the error will be throw to the Bugsnag
     * @var Log
     */
    public function insertLog(Log $log) : void
    {
        try {
            $log->save();
        } catch (\Exception $e) {
            handle($e, $e->getMessage(), 500);
        }
    }
}
