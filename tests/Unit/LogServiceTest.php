<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Services\LogService;
use App\Models\Log;
use Ramsey\Uuid\Uuid;

class LogServiceTest extends TestCase
{
    public function testSimulate()
    {
        $log = new Log();
        $log->uuid = Uuid::uuid4()->toString();
        $log->title = 'teste title';
        $log->details = 'teste details';
        $log->exception = 'not found';
        $log->created_at = now();

        $logService = new LogService();
        $logService->insertLog($log);

        $this->assertTrue(true);
    }
}
