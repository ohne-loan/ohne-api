<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserPersonalInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_personal_infos', function (Blueprint $table) {
	        $table->increments('id');

	        $table->unsignedInteger('user_id')
                ->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');

	        $table->unsignedInteger('spouse_id')->nullable()
                ->foreign('spouse_id')
                ->references('id')
                ->on('spouses');

	        $table->unsignedInteger('education_level_id')
                ->foreign('education_level_id')
                ->references('id')
                ->on('education_levels');

	        $table->string('naturality');
	        $table->string('naturality_id');

            $table->string('nacionality')->default('Brasil');

	        $table->unsignedInteger('income_proof_id')->nullable()
                ->foreign('income_proof_id')
                ->references('id')
                ->on('user_documents');

	        $table->string('mother_name');
	        $table->string('father_name')->nullable();
	        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_personal_infos');
    }
}
