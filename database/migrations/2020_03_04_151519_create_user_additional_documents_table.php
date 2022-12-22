<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserAdditionalDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_additional_documents', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->string('document_name', 100);
            $table->unsignedInteger('user_document_id');
            $table->timestamps();

            $table->foreign('user_id')
	            ->references('id')
                ->on('users')
                ->onDelete('cascade');
                
            $table->foreign('user_document_id')
	            ->references('id')
                ->on('user_documents')
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
        Schema::dropIfExists('user_additional_documents');
    }
}
