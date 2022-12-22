<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spouses', function (Blueprint $table) {
            $table->increments('id');
			$table->string('name');
			$table->string('cpf');
			$table->date('birthday');
			$table->string('phone', 20);
			$table->boolean('has_loans');
			$table->float('gross_income');
			$table->string('profession', 100);
			$table->unsignedInteger('income_proof_id');
            $table->timestamps();

            $table->foreign('income_proof_id')
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
        Schema::dropIfExists('spouses');
    }
}
