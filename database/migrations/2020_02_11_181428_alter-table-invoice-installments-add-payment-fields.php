<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTableInvoiceInstallmentsAddPaymentFields extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('invoice_installments', function (Blueprint $table) {
            $table->float('payment_amount')->nullable();
            $table->float('fine')->nullable();
            $table->float('interest')->nullable();
        });

        DB::statement('UPDATE invoice_installments SET payment_amount = 0, fine = 0, interest = 0;');

        Schema::table('invoice_installments', function (Blueprint $table) {
            $table->float('payment_amount')->nullable(false)->change();
            $table->float('fine')->nullable(false)->change();
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
        Schema::table('invoice_installments', function (Blueprint $table) {
            $table->dropColumn('payment_amount');
            $table->dropColumn('fine');
            $table->dropColumn('interest');
        });
    }
}
