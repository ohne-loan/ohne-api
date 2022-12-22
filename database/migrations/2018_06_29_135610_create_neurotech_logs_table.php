<?php

use App\NeurotechLog;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNeurotechLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('neurotech_logs', function (Blueprint $table) {
            $table->increments('id');
            $table->longText('input');
            $table->longText('output');
            $table->longText('trace')->nullable();
            $table->enum('type', NeurotechLog::TYPES);
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
        Schema::dropIfExists('neurotech_logs');
    }
}
