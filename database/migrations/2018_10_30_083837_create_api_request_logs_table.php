<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApiRequestLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('log_api_requests', function (Blueprint $table) {
            $table->increments('id');
            $table->string('verb');
            $table->string('uri');
            $table->text('in_body')->nullable();
            $table->text('in_headers')->nullable();
            $table->text('out_body')->nullable();
            $table->text('out_headers')->nullable();
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
        Schema::dropIfExists('log_api_requests');
    }
}
