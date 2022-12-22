<?php

use App\Models\Invoice;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->increments('id');
	        $table->unsignedInteger('loan_installment_id');
	        $table->uuid('uuid');
	        $table->string('code');
	        $table->string('link');
	        $table->enum('status', Invoice::STATUSES);
	        $table->date('expiration_date');
	        $table->dateTime('payment_date')->nullable();
	        $table->timestamps();

	        $table->foreign('loan_installment_id')
                ->references('id')
            	->on('loan_installments')
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
        Schema::dropIfExists('invoices');
    }
}
