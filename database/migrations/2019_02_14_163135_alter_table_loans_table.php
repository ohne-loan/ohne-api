<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTableLoansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('loans', function (Blueprint $table) {
            $table->unsignedInteger('loan_reason_id')
                ->foreign('loan_reason_id')
                ->references('id')
                ->on('loan_reason')
                ->onDelete('cascade')
                ->default(6);

            $table->string('loan_reason_description', 500)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('loans', function(Blueprint $table){
            $table->dropColumn('loan_reason_id');
            $table->dropColumn('loan_reason_description');
        });
    }
}
