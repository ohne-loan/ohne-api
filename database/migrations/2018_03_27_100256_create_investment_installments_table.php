<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvestmentInstallmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('investment_installments', function (Blueprint $table) {
            $table->increments('id');
	        $table->unsignedInteger('investment_id');
	        $table->date('date');
	        $table->float('net_interest', 10, 3);
	        $table->float('returned_amount', 10, 3);
	        $table->float('gross_installment', 10, 3);
	        $table->float('accumulated_roi', 10, 3);
	        $table->float('income_tax_rate', 10, 3);
	        $table->float('income_tax_discount', 10, 3);
	        $table->float('net_installment', 10, 3);
	        $table->timestamps();

	        $table->foreign('investment_id')
                ->references('id')
            	->on('investments')
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
        Schema::dropIfExists('investment_installments');
    }
}
