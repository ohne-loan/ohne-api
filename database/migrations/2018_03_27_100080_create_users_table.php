<?php

use App\Models\User;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
	        $table->increments('id');
	        $table->uuid('uuid');
	        $table->unsignedInteger('address_id')->nullable();
	        $table->unsignedInteger('marital_status_id')->nullable();
	        $table->unsignedInteger('identity_proof_front_id')->nullable();
	        $table->unsignedInteger('identity_proof_back_id')->nullable();
	        $table->unsignedInteger('professional_class_id')->nullable();
	        $table->unsignedInteger('personal_reference_id')->nullable();
	        $table->string('name');
	        $table->char('cpf', 11)->unique()->nullable();
	        $table->string('email')->unique();
	        $table->string('password');
	        $table->dateTime('password_change_date')->nullable();
	        $table->date('birthday')->nullable();
	        $table->enum('gender', User::GENDERS)->nullable();
	        $table->boolean('active')->default(false);
	        $table->float('gross_income')->nullable();
	        $table->string('profession')->nullable();
	        $table->boolean('politically_exposed_person')->default(false);
	        $table->softDeletes();
	        $table->timestamps();

	        $table->foreign('address_id')
	            ->references('id')
	            ->on('addresses');

	        $table->foreign('marital_status_id')
	            ->references('id')
	            ->on('marital_statuses');

	        $table->foreign('identity_proof_front_id')
	            ->references('id')
	            ->on('user_documents');

			$table->foreign('identity_proof_back_id')
				->references('id')
				->on('user_documents');

            $table->foreign('professional_class_id')
                ->references('id')
                ->on('professional_classes');

            $table->integer('benefit_number')->nullable();
            $table->string('company_name')->nullable();
            $table->date('admission_date')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
