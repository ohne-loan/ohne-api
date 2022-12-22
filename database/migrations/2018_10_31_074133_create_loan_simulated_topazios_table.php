<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoanSimulatedTopaziosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loans_simulated_topazio', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->float('quota_amount')->nullable();
            $table->float('total_value')->nullable();
            $table->float('installment_value')->nullable();
            $table->float('principal_value')->nullable();
            $table->float('gross_value')->nullable();
            $table->float('net_value')->nullable();
            $table->float('iof_value')->nullable();
            $table->decimal('monthly_rate', 10, 7)->nullable();
            $table->decimal('yearly_rate', 10, 7)->nullable();
            $table->decimal('monthly_cet_rate', 10, 7)->nullable();
            $table->decimal('yearly_cet_rate', 10, 7)->nullable();
            $table->date('first_due_date')->nullable();
            $table->date('last_due_date')->nullable();
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
        Schema::dropIfExists('loans_simulated_topazio');
    }
}
