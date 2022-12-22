<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScoreCheckParametersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('score_check_parameters', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('score_check_id');
            $table->string('key');
            $table->text('value');

            $table->foreign('score_check_id')
				->references('id')
				->on('score_checks')
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
        Schema::dropIfExists('score_check_parameters');
    }
}
