<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Models\FacialBiometry;

class CreateFacialBiometriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facial_biometries', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->string('app_key', 1000);
            $table->boolean('success');
            $table->string('code_result', 20);
            $table->string('cause_result', 20)->nullable();
            $table->string('protocol', 20)->nullable();
            $table->decimal('score', 4, 2)->nullable();
            $table->enum('origin', FacialBiometry::ORIGINS);
            $table->unsignedInteger('user_documents_id');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');

            $table->foreign('user_documents_id')
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
        Schema::dropIfExists('facial_biometries');
    }
}
