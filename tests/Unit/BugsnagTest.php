<?php

namespace Tests\Feature;

use Bugsnag\BugsnagLaravel\Facades\Bugsnag;
use RuntimeException;
use Tests\TestCase;

class BugsnagTest extends TestCase
{
    public function testNotification()
    {
        Bugsnag::notifyException(new RuntimeException("Test error"));
    }
}
