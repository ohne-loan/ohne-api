<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTableLoansAddForeignKeyToLoanTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement(@"ALTER TABLE loan_tags DROP CONSTRAINT loan_tags_loan_id_foreign");
        DB::statement(@"ALTER TABLE loan_tags ADD CONSTRAINT loan_tags_loan_id_foreign FOREIGN KEY (loan_id) REFERENCES loans (id) ON UPDATE NO ACTION ON DELETE CASCADE");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement(@"ALTER TABLE loan_tags ADD CONSTRAINT loan_tags_loan_id_foreign FOREIGN KEY (loan_id) REFERENCES loans (id)");
    }
}
