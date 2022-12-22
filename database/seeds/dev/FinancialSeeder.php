<?php

namespace Database\Seeds\Dev;

use App\Models\Bank;
use App\Models\CompanyBankAccount;
use App\Models\Contract;
use App\Models\IncomeTaxRate;
use App\Models\Investment;
use App\Models\InvestmentInstallment;
use App\Models\InvestmentRate;
use App\Models\Invoice;
use App\Models\InvoiceModifier;
use App\Models\Loan;
use App\Models\LoanInstallment;
use App\Models\Transfer;
use App\Models\TransferModifier;
use App\Models\UserBankAccount;
use App\Models\BankAccount;
use Illuminate\Database\Seeder;

class FinancialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        echo "Contract\n";
    	factory(Contract::class, 10)->create();

        echo "BankAccount\n";
    	factory(BankAccount::class, 10)->create();

        echo "CompanyBankAccount\n";
    	factory(CompanyBankAccount::class, 5)->create();

        echo "UserBankAccount\n";
    	factory(UserBankAccount::class, 5)->create();

        echo "Loan\n";
    	$loans = factory(Loan::class, 5)->create();

    	foreach ($loans as $loan) {
    		echo "\tLoan {$loan->id}\n";

	        echo "\t\tLoanInstallment\n";
	        factory(LoanInstallment::class, $loan->num_installments)->create();

	        echo "\t\tInvoice\n";
	        factory(Invoice::class, rand(1, 5))->create();

	        echo "\t\tInvoiceModifier\n";
	        factory(InvoiceModifier::class, rand(0, 3))->create();
	    }

        echo "Investment\n";
    	$investments = factory(Investment::class, 5)->create();

    	foreach ($investments as $investment) {
    		echo "\tInvestment {$investment->id}\n";

	        echo "\t\tInvestmentInstallment\n";
	        factory(InvestmentInstallment::class, $investment->num_installments)->create();
	    }

        echo "Transfer\n";
    	$transfers = factory(Transfer::class, 5)->create();

    	foreach ($transfers as $transfer) {
    		echo "\tTransfer {$transfer->id}\n";

	        echo "\t\tTransferModifiers\n";
	        factory(TransferModifier::class, rand(0, 3))->create();
	    }

	    echo "InvestmentRate\n";
    	InvestmentRate::insert([
    		[
				'rate' => 0.015,
				'contract_template' => 'MTU1Mg==',
				'liquidatable' => false
			],
			[
				'rate' => 0.012,
				'contract_template' => 'MTU1Mw==',
				'liquidatable' => true
			]
		]);

		echo "IncomeTaxRate\n";
		IncomeTaxRate::insert([
			[
				'min' => 1,
				'max' => 6,
				'rate' => 0.225
			],
			[
				'min' => 7,
				'max' => 12,
				'rate' => 0.2
			],
			[
				'min' => 13,
				'max' => 24,
				'rate' => 0.175
			],
			[
				'min' => 25,
				'max' => 48,
				'rate' => 0.15
			],
		]);
    }
}
