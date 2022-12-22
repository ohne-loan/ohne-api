<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTableInvoicesAddAmortisationAndInterest extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('invoices', function (Blueprint $table) {
            $table->float('amortisation')->nullable();
            $table->float('interest')->nullable();
            $table->float('final_interest')->nullable();
        });

        DB::statement('UPDATE invoices SET amortisation = 0, interest = 0;');

        Schema::table('invoices', function (Blueprint $table) {
            $table->float('amortisation')->nullable(false)->change();
            $table->float('interest')->nullable(false)->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('invoices', function (Blueprint $table) {
            $table->dropColumn('amortisation');
            $table->dropColumn('interest');
            $table->dropColumn('final_interest');
        });
    }
}
