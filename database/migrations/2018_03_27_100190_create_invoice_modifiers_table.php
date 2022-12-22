<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvoiceModifiersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoice_modifiers', function (Blueprint $table) {
            $table->increments('id');
	        $table->unsignedInteger('invoice_id');
	        $table->string('description');
	        $table->float('value');

	        $table->foreign('invoice_id')
                ->references('id')
            	->on('invoices')
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
        Schema::dropIfExists('invoice_modifiers');
    }
}
