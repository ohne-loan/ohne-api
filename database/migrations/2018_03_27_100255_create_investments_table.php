<?php

use App\Models\Investment;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvestmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('investments', function (Blueprint $table) {
            $table->increments('id');
	        $table->unsignedInteger('user_id');
	        $table->unsignedInteger('contract_id')->nullable();
	        $table->unsignedInteger('company_bank_account_id')->nullable();
	        $table->unsignedInteger('deposit_proof_id')->nullable();
	        $table->float('amount');
	        $table->float('total_earnings');
	        $table->integer('num_installments');
	        $table->float('monthly_rate');
	        $table->enum('status', Investment::STATUSES);
	        $table->tinyInteger('payment_day');
	        $table->boolean('liquidatable')->default(false);
	        $table->timestamps();
	        $table->softDeletes();

	        $table->foreign('user_id')
                ->references('id')
            	->on('users')
	            ->onDelete('cascade');

	        $table->foreign('contract_id')
                ->references('id')
            	->on('contracts');

			$table->foreign('deposit_proof_id')
				->references('id')
				->on('user_documents');

			$table->foreign('company_bank_account_id')
				->references('id')
				->on('company_bank_accounts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('investments');
    }
}
