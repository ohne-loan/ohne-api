<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableLoansAdd extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loans_add', function (Blueprint $table) {
            $table->increments('id');
	        $table->unsignedInteger('user_id');
            $table->string('proposal_number')->nullable();
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
        Schema::dropIfExists('loans_add');
    }
}
