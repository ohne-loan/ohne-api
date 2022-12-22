<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoanChargesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loan_charges', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('loan_id');
            $table->unsignedInteger('bigger_time_arrear')->nullable();
            $table->unsignedInteger('smaller_time_arrear')->nullable();
            $table->float('frozen_balance')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('loan_id')
            ->references('id')
            ->on('loans')
            ->onDelete('cascade');
        });

        DB::statement('ALTER TABLE loan_charges ALTER COLUMN created_at SET DEFAULT (NOW() AT TIME ZONE \'America/Sao_Paulo\')');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('loan_charges');
    }
}
