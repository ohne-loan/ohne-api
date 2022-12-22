<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTableSpousesChangeColumnOptional extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('spouses', function (Blueprint $table) {
            $table->string('cpf')->nullable()->change();
            $table->date('birthday')->nullable()->change();
            $table->string('phone')->nullable()->change();
            $table->boolean('has_loans')->nullable()->change();
            $table->string('profession')->nullable()->change();
            $table->float('gross_income')->nullable()->change();
            $table->unsignedInteger('income_proof_id')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('spouses', function (Blueprint $table) {
            $table->string('cpf')->change();
            $table->date('birthday')->change();
            $table->string('phone')->change();
            $table->boolean('has_loans')->change();
            $table->string('profession')->change();
            $table->float('gross_income')->change();
            $table->unsignedInteger('income_proof_id')->change();
        });
    }
}
