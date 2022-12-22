<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Services\IOFService;
use Illuminate\Support\Collection;

class IOFServiceTest extends TestCase
{
    public function testCalcIOF()
    {   
        $iOFService = new IOFService();
        
        $loanValue = 3.000;

        $installments = new Collection();

        for ($i=0; $i < 14; $i++) { 
            
        }

        $installments = \collect();

        $installments = Collection::make([1, 2, 3]);

        $iOFValue = $iOFService->getIOFValue($loanValue, $installments);

        $this->assertTrue($iOFValue == 72.30);
    }
}
