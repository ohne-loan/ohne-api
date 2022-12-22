<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoanSimulatedInstallmentsTopaziosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loans_simulated_installments_topazio', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('loan_simulated_topazio_id');
            $table->unsignedInteger('number');
            $table->float('value')->nullable();
            $table->date('due_date')->nullable();
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
        Schema::dropIfExists('loans_simulated_installments_topazio');
    }
}
