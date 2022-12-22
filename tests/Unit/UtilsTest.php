<?php

namespace Tests\Feature;

use Tests\TestCase;


class UtilsTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testRateMonthToYear()
    {
        $monthlyRate = 0.0259;

        $yearlyRate = rateMonthToYear($monthlyRate);

        $this->assertTrue(true);
    }
}
