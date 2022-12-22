<?php

use App\Models\Loan;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loans', function (Blueprint $table) {
            $table->increments('id');
	        $table->unsignedInteger('user_id');
	        $table->unsignedInteger('contract_id')->nullable();
	        $table->float('amount');
            $table->integer('num_installments');
            $table->float('installment_value');
	        $table->float('monthly_rate');
            $table->float('yearly_rate');
	        $table->enum('status', Loan::STATUSES);
	        $table->float('monthly_effective_cost');
            $table->float('annual_effective_cost');
            $table->float('monthly_cet_rate');
            $table->float('cet_rate');
            $table->float('amount_effective_cost');
	        $table->float('iof_value');
	        $table->bigInteger('bank_note')->nullable();
	        $table->integer('expiration_day');
	        $table->timestamps();
	        $table->softDeletes();

	        $table->foreign('user_id')
                ->references('id')
            	->on('users')
	            ->onDelete('cascade');

	        $table->foreign('contract_id')
                ->references('id')
            	->on('contracts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('loans');
    }
}
