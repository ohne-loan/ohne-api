<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTableUserPersonalInfoAddPatrimony extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user_personal_infos', function (Blueprint $table) {
            $table->float('patrimony')->nullable();
        });

        DB::statement('UPDATE user_personal_infos SET patrimony = 0');

        Schema::table('user_personal_infos', function (Blueprint $table) {
            $table->float('patrimony')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_personal_infos', function(Blueprint $table){
            $table->dropColumn('patrimony');
        });
    }
}
