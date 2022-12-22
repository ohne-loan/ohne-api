<?php

use App\Models\RG;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRgDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rg_documents', function (Blueprint $table) {
            $table->increments('id');
	        $table->unsignedInteger('user_id');
	        $table->string('rg');
	        $table->string('issuing_body', 191);
	        $table->unsignedInteger('issuing_state');
	        $table->date('issuing_date');
	        $table->timestamps();

	        $table->foreign('user_id')
                ->references('id')
            	->on('users')
	            ->onDelete('cascade');

	        $table->foreign('issuing_state')
                ->references('id')
                ->on('states');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rg_documents');
    }
}
