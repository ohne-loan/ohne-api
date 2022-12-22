<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserDeviceData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_device_data', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->string('client', 300)->nullable();
            $table->string('operating_system', 300)->nullable();
            $table->string('device_name', 300)->nullable();
            $table->string('device_brand', 300)->nullable();
            $table->string('device_model', 300)->nullable();
            $table->boolean('is_bot')->default(false);
            $table->string('bot_info', 300)->nullable();
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
        Schema::dropIfExists('user_device_data');
    }
}
