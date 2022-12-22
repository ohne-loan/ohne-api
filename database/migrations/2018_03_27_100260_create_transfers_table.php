<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransfersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transfers', function (Blueprint $table) {
            $table->increments('id');
	        $table->unsignedInteger('investment_installment_id');
	        $table->unsignedInteger('company_bank_account_id');
	        $table->unsignedInteger('user_bank_account_id');
	        $table->float('amount');
	        $table->string('description');
	        $table->timestamps();
	        $table->softDeletes();

	        $table->foreign('investment_installment_id')
                ->references('id')
            	->on('investment_installments');

	        $table->foreign('company_bank_account_id')
                ->references('id')
            	->on('company_bank_accounts')
	            ->onDelete('cascade');

	        $table->foreign('user_bank_account_id')
                ->references('id')
            	->on('user_bank_accounts')
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
        Schema::dropIfExists('transfers');
    }
}
