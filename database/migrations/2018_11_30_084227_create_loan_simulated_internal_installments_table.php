<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoanSimulatedInternalInstallmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loans_simulated_internal_installments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('loan_simulated_internal_id');
            $table->float('balance')->nullable();
            $table->float('amount')->nullable();
            $table->float('amortisation')->nullable();
            $table->float('interest')->nullable();
            $table->float('balance_due')->nullable();
            $table->date('date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('loans_simulated_internal_installments');
    }
}
