<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTableLoanChargesAddTimeArrear extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('loan_charges', function (Blueprint $table) {
            $table->integer('time_arrear')->nullable();
        });

        DB::statement('UPDATE loan_charges SET time_arrear = 0');

        Schema::table('loan_charges', function (Blueprint $table) {
            $table->integer('time_arrear')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('loan_charges', function(Blueprint $table){
            $table->dropColumn('time_arrear');
        });
    }
}
