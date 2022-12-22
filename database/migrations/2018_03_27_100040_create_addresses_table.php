<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->increments('id');
//	        $table->unsignedInteger('city_id');
            $table->string('state');
            $table->string('city');
            $table->unsignedInteger('address_proof_id')->nullable();
	        $table->string('postal_code', 15);
	        $table->integer('number');
	        $table->string('address');
	        $table->string('address_extra')->nullable();
	        $table->string('neighborhood');
	        $table->timestamps();

//	        $table->foreign('city_id')
//                ->references('id')
//            	->on('cities')
//	            ->onDelete('cascade');

	        $table->foreign('address_proof_id')
                ->references('id')
            	->on('user_documents');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('addresses');
    }
}
