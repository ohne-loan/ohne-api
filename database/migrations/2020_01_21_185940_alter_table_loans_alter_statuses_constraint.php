<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTableLoansAlterStatusesConstraint extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement(@"ALTER TABLE loans DROP CONSTRAINT loans_status_check");
        DB::statement(@"ALTER TABLE loans ADD CONSTRAINT loans_status_check CHECK (status::text = ANY (ARRAY['PENDING'::character varying::text, 'PENDING_TO_APPROVAL'::character varying::text, 'SOROCRED_PENDING'::character varying::text, 'WAIT_SIGN'::character varying::text, 'IN_PROGRESS'::character varying::text, 'FINISHED'::character varying::text, 'REJECTED'::character varying::text, 'PROCESSING'::character varying::text, 'USER_REGISTERING'::character varying::text, 'CANC_BY_CLIENT'::character varying::text, 'CANC_CONTR_NSENT'::character varying::text, 'RENEGOTIATION_IN_PROGRESS'::character varying::text]))");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement(@"ALTER TABLE loans DROP CONSTRAINT loans_status_check");
        DB::statement(@"ALTER TABLE loans ADD CONSTRAINT loans_status_check CHECK (status::text = ANY (ARRAY['PENDING'::character varying::text, 'SOROCRED_PENDING'::character varying::text, 'WAIT_SIGN'::character varying::text, 'IN_PROGRESS'::character varying::text, 'FINISHED'::character varying::text, 'REJECTED'::character varying::text, 'PROCESSING'::character varying::text, 'USER_REGISTERING'::character varying::text, 'CANC_BY_CLIENT'::character varying::text, 'CANC_CONTR_NSENT'::character varying::text]))");
    }
}
