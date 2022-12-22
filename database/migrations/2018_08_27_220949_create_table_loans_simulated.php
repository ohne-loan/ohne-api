<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableLoansSimulated extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loans_simulated', function (Blueprint $table) {
            $table->increments('id');
	        $table->unsignedInteger('user_id');
            $table->date('base_data')->nullable();
            $table->unsignedInteger('num_installments')->nullable();
            $table->float('financed_value')->nullable();
            $table->float('installment_value')->nullable();
            $table->float('principal_value')->nullable();
            $table->float('gross_value')->nullable();
            $table->float('net_value')->nullable();
            $table->float('iof_value')->nullable();
            $table->float('customer_rate')->nullable();
            $table->float('approximate_rate')->nullable();
            $table->float('cet_rate')->nullable();
            $table->float('nominal_rate')->nullable();
            $table->date('first_due_date')->nullable();
            $table->date('last_due_date')->nullable();
            $table->float('monthly_cet_rate')->nullable();
            $table->float('customer_rate_annual')->nullable();
            $table->string('error_description')->nullable();
            $table->string('error_code')->nullable();
	        $table->timestamps();

	        $table->foreign('user_id')
                ->references('id')
            	->on('users')
	            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('loans_simulated');
    }
}
