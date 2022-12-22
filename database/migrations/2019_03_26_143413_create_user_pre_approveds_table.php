<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserPreApprovedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_pre_approveds', function (Blueprint $table) {
            $table->increments('id');
            $table->char('cpf', 11);
            $table->unsignedInteger('user_pre_approved_partner_id')->nullable();
            $table->string('origin_base_name');

            $table->foreign('user_pre_approved_partner_id')
                ->references('id')
                ->on('user_pre_approved_partners')
                ->onDelete('cascade');
	        
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_pre_approveds');
    }
}
