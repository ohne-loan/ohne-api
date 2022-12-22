<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterConstraintInvoiceStatus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement(@"ALTER TABLE invoices DROP CONSTRAINT invoices_status_check");
        DB::statement(@"ALTER TABLE invoices ADD CONSTRAINT invoices_status_check CHECK (status = ANY (ARRAY['AUTHORIZED', 'DECLINED', 'FAILED', 'NOT_AUTHORIZED', 'CONFIRMED', 'created', 'registered', 'paid', 'overdue', 'failed']))");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement(@"ALTER TABLE invoices DROP CONSTRAINT invoices_status_check");
        DB::statement(@"ALTER TABLE invoices ADD CONSTRAINT invoices_status_check CHECK (status = ANY (ARRAY['AUTHORIZED', 'DECLINED', 'FAILED', 'NOT_AUTHORIZED', 'CONFIRMED']))");
    }
}
