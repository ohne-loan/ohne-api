<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransferModifiersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transfer_modifiers', function (Blueprint $table) {
	        $table->increments('id');
	        $table->unsignedInteger('transfer_id');
	        $table->string('description');
	        $table->float('value');

	        $table->foreign('transfer_id')
		        ->references('id')
		        ->on('transfers')
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
        Schema::dropIfExists('transfer_modifiers');
    }
}
