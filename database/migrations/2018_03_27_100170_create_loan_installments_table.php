<?php

use App\Models\LoanInstallment;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoanInstallmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loan_installments', function (Blueprint $table) {
            $table->increments('id');
	        $table->unsignedInteger('loan_id');
	        $table->date('date');
	        $table->float('balance', 10, 3);
	        $table->float('amount', 10, 3);
	        $table->float('amortisation', 10, 3);
	        $table->float('interest', 10, 3);
	        $table->float('balance_due', 10, 3);
			$table->enum('status', LoanInstallment::STATUSES);
			$table->boolean('is_discharge')->default(0);
	        $table->timestamps();
	        $table->softDeletes();

	        $table->foreign('loan_id')
                ->references('id')
            	->on('loans')
	            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('loan_installments');
    }
}
