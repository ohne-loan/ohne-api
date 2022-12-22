<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class StarkBankCustomers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stark_bank_customers', function (Blueprint $table) {
	        $table->increments('id');
	        $table->unsignedInteger('user_id');
	        $table->string('customer_id', 50);
	        $table->softDeletes();
	        $table->timestamps();

	        $table->foreign('user_id')
	            ->references('id')
	            ->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stark_bank_customers');
    }
}
