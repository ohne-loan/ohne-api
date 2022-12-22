<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InsertParameterLoanInstallmentsAmountMin extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement(@"INSERT INTO parameters (key, value, type, alias, public, created_at)
        VALUES('loan.installments.amount.min', 100.00, 'FLOAT', 'Valor mínimo da parcela do empréstimo', 'true', now())");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DELETE FROM parameters WHERE key = 'loan.installments.amount.min'");
    }
}
