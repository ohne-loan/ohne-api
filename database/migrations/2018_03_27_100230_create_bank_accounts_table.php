<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Models\BankAccount;

class CreateBankAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bank_accounts', function (Blueprint $table) {
	        $table->increments('id');
	        $table->unsignedInteger('bank_id');
	        $table->string('agency_number', 11);
	        $table->string('account_number', 20);
	        $table->string('owner');
	        $table->enum('type', BankAccount::TYPES);
	        $table->timestamps();
	        $table->softDeletes();

	        $table->foreign('bank_id')
                ->references('id')
            	->on('banks');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bank_accounts');
    }
}
